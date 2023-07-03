<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Wallet;
use Illuminate\Http\Request;

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
}
