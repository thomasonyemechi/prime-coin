<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function depositIndex()
    {
        $deposits = Deposit::where('user_id', auth()->user()->id)->orderby('id', 'desc')->paginate(10);
        return view('users.deposit', compact('deposits'));
    }

    function indexU()
    {
        $transactions = Wallet::where(['user_id' => auth()->user()->id ])->orderby('id', 'desc')->limit(10)->get();
        return view('users.index', compact('transactions'));
    }

    function walletSettingIndex()
    {
        return view('users.walletsettings');
    }


    function updateWallet(Request $request)
    {
        $val = Validator::make($request->all(), [
            'wallet_address' => 'required|string'
        ])->validate();

        $wal = WalletAddress::create([
            'user_id' => auth()->user()->id,
            'wallet' => $request->wallet_address
        ]);

        User::where('id', auth()->user()->id)->update([
            'wallet' => $wal->wallet_address
        ]);
    }
}
