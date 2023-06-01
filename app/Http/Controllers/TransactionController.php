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
            'amount' => 'integer|required|min:10',
        ])->validate();
        Deposit::create([
            'user_id' => auth()->user()->id,
            'amount' => $request->amount,
            'rate' => $this->coin_current_price(),
            'status' => 'pending',
        ]);
        return back()->with('success', 'Your request deposit has been submitted');
    }


    function adminApproveDeposit(Request $request) 
    {

    }


    function buyPrimeCoin(Request $request)
    {

    }

    function rewardSponsor()
    {
        
    }
}
