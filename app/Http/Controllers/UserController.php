<?php

namespace App\Http\Controllers;

use App\Models\CoinInfo;
use App\Models\Deposit;
use App\Models\Earning;
use App\Models\PriceChange;
use App\Models\Purchase;
use App\Models\Trade;
use App\Models\Transfer;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletAddress;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use function Symfony\Component\String\b;

class UserController extends Controller
{
    public function howToIndex()
    {
        return view('users.how_to');
    }


    public function depositIndex()
    {
        $deposits = Deposit::where('user_id', auth()->user()->id)->orderby('id', 'desc')->paginate(10);
        $coin = CoinInfo::first();
        return view('users.deposit', compact(['deposits', 'coin']));
    }

    function indexU()
    {
        $user_id = auth()->user()->id;
        $pc_balance = pcBalance($user_id);

        $rate = PriceChange::latest()->first()->price;
        $pc_total =  $pc_balance / $rate;

        $usdt_balance = usdtBalance($user_id);

        $spc_balance = spcBalance($user_id);

        $total = $pc_total + $usdt_balance + $spc_balance;


        $transactions = Wallet::where(['user_id' => auth()->user()->id])->orderby('id', 'desc')->limit(10)->get();
        return view('users.index', compact(['transactions', 'pc_balance', 'user_id', 'rate', 'pc_total', 'total', 'usdt_balance', 'spc_balance']));
    }

    function convertIndex()
    {
        $user_id = auth()->user()->id;
        $usdt_balance = usdtBalance($user_id);
        $rate = PriceChange::latest()->first()->price;

        $purchases = Purchase::where(['user_id' => $user_id])->orderby('id', 'desc')->limit(25)->get();
        return view('users.convert', compact(['usdt_balance', 'user_id', 'rate', 'purchases']));
    }

    function tradeIndex()
    {
        $user_id = auth()->user()->id;
        $spc_balance = spcBalance($user_id);

        $trades = Trade::where(['user_id' => $user_id])->orderby('id', 'desc')->limit(25)->get();
        return view('users.trade', compact(['spc_balance', 'user_id', 'trades']));
    }

    function walletSettingIndex()
    {
        $wallets = WalletAddress::where(['user_id' => auth()->user()->id])->orderBy('id', 'desc')->get();
        return view('users.walletsettings', compact('wallets'));
    }


    function withdrwal()
    {
        $usdt_balance = usdtBalance(auth()->user()->id);
        $withdrawals = Withdrawal::where(['user_id' => auth()->user()->id])->orderby('id', 'desc')->limit(25)->get();
        return view('users.withdrwal', compact(['usdt_balance', 'withdrawals']));
    }


    function transferIndex()
    {
        $user_id = auth()->user()->id;
        $usdt_balance = usdtBalance($user_id);
        $transfers = Transfer::with(['receiver:id,username'])->where(['sender_id' => auth()->user()->id])->orderby('id', 'desc')->get();
        return view('users.transfer', compact(['transfers', 'usdt_balance']));
    }

    function rIndex()
    {
        $user_id = auth()->user()->id;
        $received = Transfer::with(['sender:id,username'])->where(['receiver_id' => auth()->user()->id])->orderby('id', 'desc')->get();
        return view('users.received', compact(['received']));
    }

    function earningsIndex()
    {
        $user_id = auth()->user()->id;
        $earnings = Earning::with(['downliner:id,username'])->where(['user_id' => auth()->user()->id])->orderby('id', 'desc')->get();
        return view('users.earnings', compact(['earnings']));
    }

    function transfer(Request $request)
    {
        $val = Validator::make($request->all(), [
            'amount' => 'required|integer|min:20',
            'password' => 'required|string'
        ])->validate();

        if ($request->amount > usdtBalance(auth()->user()->id)) {
            return back()->with('error', 'You do not have up to this amount of USDT in your wallet, fund your wallet and try again ');
        }

        $tran = Transfer::create([
            'sender_id' => auth()->user()->id,
            'receiver_id' => $request->user_id,
            'amount' => $request->amount,
            'status' => 'successful'
        ]);

        ///debit sender
        Wallet::create([
            'currency' => 'usdt',
            'amount' => -$request->amount,
            'type' => 1,
            'user_id' => auth()->user()->id,
            'remark' => 'USDT Transfer',
            'ref_id' => $tran->id,
            'action' => 'debit'
        ]);

        ///credit receiver
        Wallet::create([
            'currency' => 'usdt',
            'amount' => $request->amount,
            'type' => 1,
            'user_id' => $request->user_id,
            'remark' => 'Received Fund',
            'ref_id' => $tran->id,
            'action' => 'credit'
        ]);
        return back()->with('success', 'Funds have been transfered!');
    }


    function updateWallet(Request $request)
    {
        $val = Validator::make($request->all(), [
            'wallet_address' => 'required|string',
            'password' => 'required|string'
        ])->validate();

        if (!password_verify($request->password, auth()->user()->password)) {
            return back()->with('error', 'You entered a wrong password');
        }

        $wal = WalletAddress::create([
            'user_id' => auth()->user()->id,
            'wallet_address' => $request->wallet_address
        ]);

        User::where('id', auth()->user()->id)->update([
            'wallet' => $wal->wallet_address
        ]);

        return back()->with('success', 'You wallet address has been updated');
    }


    function buyPrimeCoin(Request $request)
    {
        $val = Validator::make($request->all(), [
            'usdt_amount' => 'required|integer|min:20'
        ])->validate();


        if ($request->usdt_amount > usdtBalance(auth()->user()->id)) {
            return back()->with('error', 'You don have up to this ammount of USDT in your wallet, fund your wallet and try again ');
        }

        $rate = $this->coin_current_price();

        ///////log purchase in purchase
        $purchase = Purchase::create([
            'user_id' => auth()->user()->id,
            'amount' => $request->usdt_amount,
            'rate' => $rate,
            'currency' => 'pc'
        ]);

        //debit user USDT beause of purchase
        Wallet::create([
            'currency' => 'usdt',
            'amount' => -$request->usdt_amount,
            'type' => 1,
            'user_id' => auth()->user()->id,
            'remark' => 'Primecoin purchase',
            'ref_id' => $purchase->id,
            'action' => 'debit'
        ]);

        //credit user PC
        Wallet::create([
            'currency' => 'pc',
            'amount' => $request->usdt_amount * $rate,
            'type' => 2,
            'user_id' => auth()->user()->id,
            'remark' => 'Primecoin Deposit',
            'ref_id' => $purchase->id,
            'action' => 'credit'
        ]);

        ///pay user sponsor pay 20%
        // if (auth()->user()->sponsor != 1) {

            $percent = ($request->usdt_amount * 20) / 100; //caluclating percentage

            // log earnings 
            $earned = Earning::create([
                'user_id' => auth()->user()->sponsor,
                'amount' => $percent,
                'downline' => auth()->user()->id
            ]);

            Wallet::create([
                'currency' => 'spc',
                'amount' => $percent,
                'type' => 3,
                'user_id' => auth()->user()->sponsor,
                'remark' => 'Earning',
                'ref_id' => $earned->id,
                'action' => 'credit'
            ]);
        // }
        return redirect('/dashboard')->with('success', 'Coin purchase was successful');
    }


    public function tradeSpc(Request $request)
    {
        $val = Validator::make($request->all(), [
            'amount' => 'integer|required'
        ])->validate();

        $user_id = auth()->user()->id;
        if($request->amount > spcBalance($user_id)) 
        {
            return back()->with('error', 'Insuffcient SPC balance');
        }

        /////////log trade
        $trade = Trade::create([
            'user_id' => $user_id,
            'amount' => $request->amount,
        ]);

        /////// remove spc from wallet        
        Wallet::create([
            'currency' => 'spc',
            'amount' => -$request->amount,
            'type' => 3,
            'user_id' => $user_id,
            'remark' => 'Trade',
            'ref_id' => $trade->id,
            'action' => 'debit'
        ]);

        //credit user with usdt
        Wallet::create([
            'currency' => 'usdt',
            'amount' => $request->amount,
            'type' => 1,
            'user_id' => $user_id,
            'remark' => 'spc converted',
            'ref_id' => $trade->id,
            'action' => 'debit'
        ]);

        return back()->with('success', 'SPC trade has been made');
    }


    function make_withdrawal(Request $request)
    {
        Validator::make($request->all(), [
            'amount' => 'required|min:20'
        ]);
        ///logg withdrwal
        if($request->amount > (usdtBalance(auth()->user()->id)-1) ){
            return back()->with('error', 'Insufficient fund');
        }
        $with = Withdrawal::create([
            'amount' => $request->amount,
            'status' => 'pending', 
            'user_id' => auth()->user()->id,
            'wallet_address' => auth()->user()->wallet,
        ]);
        return back()->with('success', 'Your withdrawal request has been logged, and would be reviewed');
    }
}
