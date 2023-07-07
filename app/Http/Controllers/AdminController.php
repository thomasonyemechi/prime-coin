<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\PriceChange;
use App\Models\Wallet;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function managePendingDepositIndex()
    {
        $deposits = Deposit::with(['user:id,username'])->where(['status' => 'pending'])->orderby('id','desc')->paginate(25);
        return view('admin.pending_deposit', compact('deposits'));
    }


    function depositHistoryIndex() 
    {
        $deposits = Deposit::with(['user:id,username'])->orderby('id','desc')->paginate(25);
        return view('admin.deposit_history', compact('deposits'));
    }


    function approvedDepositIndex() 
    {
        $deposits = Deposit::with(['user:id,username'])->where([ 'status' => 'approved' ])->orderby('id','desc')->paginate(25);
        return view('admin.approved_deposit', compact('deposits'));
    }

    function rejectedDepositIndex() 
    {
        $deposits = Deposit::with(['user:id,username'])->where([ 'status' => 'rejected' ])->orderby('id','desc')->paginate(25);
        return view('admin.rejected_deposit', compact('deposits'));
    }


    function withdrawHistoryIndex() 
    {
        $withdrawal = Withdrawal::with(['user:id,username'])->orderby('id','desc')->paginate(25);
        return view('admin.withdraw_history', compact('withdrawal'));
    }

    function withdrawPendingIndex()
    {
        $withdrawals = Withdrawal::with(['user:id,username'])->where(['status' => 'pending'])->orderby('id','desc')->paginate(25);
        return view('admin.pending_with', compact('withdrawals'));
    }


    function rejectDeposit(Request $request)
    {
        $val = Validator::make($request->all(), [
            'reason' => 'string',
            'deposit_id' => 'required|integer|exists:deposits,id',
        ])->validate();

        Deposit::where('id', $request->deposit_id)->update([
            'remark' => $request->remark,
            'processed_by' => auth()->user()->id,
            'status' => 'rejected'
        ]);
        ///////supposed notifier
        return back()->with('success', 'Deposit has been rejected');
    }


    function approveDeposit(Request $request)
    {
        $val = Validator::make($request->all(), [
            'reason' => 'string',
            'deposit_id' => 'required|integer|exists:deposits,id',
        ])->validate();

        $dep = Deposit::find($request->deposit_id);

        /////check if any action has once been take on this deposit
        if($dep->status != 'pending') {
            return back()->with('error', 'This deposit cannot be approved');
        }

        $dep->update([
            'remark' => $request->remark,
            'processed_by' => auth()->user()->id,
            'status' => 'approved'
        ]);

        Wallet::create([
            'ref_id' => $dep->id,
            'currency' => 'usdt',
            'amount' => $dep->amount,
            'type' => 1,
            'remark' => 'Fund Deposit',
            'user_id' => $dep->user_id,
            'action' => 'credit'
        ]);

        return back()->with('success', 'Deposit has been approved, Account has been funded');
    }


    function approveWithdrawal(Request $request)
    {
        $val = Validator::make($request->all(), [
            'id' => 'required|integer|exists:withdrawals,id',
        ])->validate();

        $with = Withdrawal::find($request->id);

        /////check if any action has once been take on this deposit
        if($with->status != 'pending') {
            return back()->with('error', 'This withdrawal request cannot be approved');
        }

        if($with->amount > usdtBalance($with->user_id)) {
            return back()->with('error', 'This deposit cannot be approved');
        }
        $with->update([
            'processed_by' => auth()->user()->id,
            'status' => 'approved'
        ]);

        Wallet::create([
            'ref_id' => $with->id,
            'currency' => 'usdt',
            'amount' => -$with->amount,
            'type' => 1,
            'remark' => 'Fund Deposit',
            'user_id' => $with->user_id,
            'action' => 'debit'
        ]);

        return back()->with('success', 'Withdrwal has been approved');
    }




}
