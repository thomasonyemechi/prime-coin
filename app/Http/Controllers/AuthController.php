<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function userLogin(Request $request)
    {
        Validator::make($request->all(), [
            'username' => 'string|exists:users,username|required',
            'password' => 'string|min:6|required'
        ])->validate();

        $log = Auth::attempt(['username' => $request->username, 'password' => $request->password]);
        if (!$log) {
            return back()->with('error', 'Invalid Credentials, Please try again');
        }
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
            'password' => 'string|min:6|confirmed',
        ])->validate();

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'sponsor' => $request->referral_id ?? 1
        ]);

        return redirect('/login')->with('success', 'You have been registered sucessfuly, Proceed to login');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/')->with('success', 'You have been logged out successfuly ');
    }


    function get_user()
    {
        $res = User::where('username', $_GET['username'])->first(['id', 'username']);
        if(!$res){ abort(404); }
        return response($res);
    }
}

