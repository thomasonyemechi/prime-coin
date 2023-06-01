<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function userLogin(Request $request) 
    {
        Validator::make($request->all(), [
            'username' => 'string|exists:users,username',
            'password' => 'string|min:6'
        ])->validate();

        $log = Auth::attempt(['username' => $request->username, 'password' => $request->password]);
        if(!$log) { return back()->with('error', 'Invalid Credentials, Please try again'); }
        return redirect('/dashboard');
    }

    function checkUsername($username) 
    {
        return User::where('username', $username)->limit(1)->count();
    }

    function createAccount(Request $request)
    {
        Validator::make($request->all(), [
            'username' => 'string|unique:users,username',
            'password' => 'string|min:6',
            'sponsor' => 'integer'
        ])->validate();

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'sponsor' => $request->sponsor ?? 1
        ]);

        return redirect('/login')->with('success', 'Your Registration Was Successful');
    }
}
