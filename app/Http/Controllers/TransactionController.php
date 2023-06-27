<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    function makeDeposit(Request $request)
    {
        Validator::make($request->all(), [
            'amount' => 'integer|required|min:2',
            'wallet' => 'string|required|min:10'
        ])->validate();

        //first check for pending transactions.....
        $check = Deposit::where(['user_id' => auth()->user()->id, 'status' => 'pending'])->count();
        if($check > 0) {
            return back()->with('error', 'You have a pending transaction, wait till it is resolved');
        }
        
        Deposit::create([
            'user_id' => auth()->user()->id,
            'amount' => $request->amount,
            'wallet' => $request->wallet,
            'status' => 'pending',
        ]);
        ///qeue mail to send to admin and users
        return back()->with('success', 'Your USDT deposit has been made and will be reviewed by the admins ');
    }


    function buyPrimeCoin(Request $request)
    {

    }

    function rewardSponsor()
    {
        
    }
}
