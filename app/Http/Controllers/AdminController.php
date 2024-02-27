<?php

namespace App\Http\Controllers;

use App\Models\AdminCredit;
use App\Models\Deposit;
use App\Models\PriceChange;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function managePendingDepositIndex()
    {
        $deposits = Deposit::with(['user:id,username'])->where(['status' => 'pending'])->orderby('id', 'desc')->paginate(25);
        return view('admin.pending_deposit', compact('deposits'));
    }

    function usersIndex(Request $request)
    {
        if ($request->user) {
            $users = User::with(['spon:id,username'])->where ( 'username', 'LIKE', '%' . $request->user . '%' )->orderby('id', 'desc')->paginate(50);
        } else {
            $users = User::with(['spon:id,username'])->where('id', '>', 1)->orderby('id', 'desc')->paginate(50);
        }
        return view('admin.users', compact('users'));
    }


    function depositHistoryIndex()
    {
        $deposits = Deposit::with(['user:id,username'])->orderby('id', 'desc')->paginate(25);
        return view('admin.deposit_history', compact('deposits'));
    }


    function approvedDepositIndex()
    {
        $deposits = Deposit::with(['user:id,username'])->where(['status' => 'approved'])->orderby('id', 'desc')->paginate(25);
        return view('admin.approved_deposit', compact('deposits'));
    }

    function rejectedDepositIndex()
    {
        $deposits = Deposit::with(['user:id,username'])->where(['status' => 'rejected'])->orderby('id', 'desc')->paginate(25);
        return view('admin.rejected_deposit', compact('deposits'));
    }


    function withdrawHistoryIndex()
    {
        $withdrawal = Withdrawal::with(['user:id,username'])->orderby('id', 'desc')->paginate(25);
        return view('admin.withdraw_history', compact('withdrawal'));
    }

    function withdrawPendingIndex()
    {
        $withdrawals = Withdrawal::with(['user:id,username'])->where(['status' => 'pending'])->orderby('id', 'desc')->paginate(25);
        return view('admin.pending_with', compact('withdrawals'));
    }


    // function allUsersIndex()


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
        if ($dep->status != 'pending') {
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
        if ($with->status != 'pending') {
            return back()->with('error', 'This withdrawal request cannot be approved');
        }

        if ($with->amount > usdtBalance($with->user_id)) {
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

    function credit()
    {
        $credits = AdminCredit::with(['user', 'admin'])->orderby('id', 'desc')->paginate(25);
        return view('admin.credit_users', compact('credits'));
    }

    function creditUser(Request $request)
    {
        Validator::make($request->all(), [
            'username' => 'required|string|exists:users,username',
            'amount' => 'required'
        ])->validate();

        $user = User::where(['username' => $request->username])->first();
        if(!$user)
        {
            abort(404);
        }


        AdminCredit::create([
            'amount' => $request->amount,
            'user_id' => $user->id,
            'by' => auth()->user()->id
        ]);

        Wallet::create([
            'currency' => 'pc',
            'amount' => $request->amount,
            'type' => 2,
            'user_id' => $user->id,
            'remark' => 'Admin Deposit',
            'ref_id' => 0000,
            'action' => 'credit'
        ]);

        return back()->with('success', 'User has been credited');
    }
}
