<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Models\ResetCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;


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

        if ($request->referral_id) {
            $sponsor = User::where(['username' => $request->referral_id])->first()->id;
        }

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'sponsor' => $sponsor ?? 1
        ]);

        return redirect('/login')->with('success', 'You have been registered sucessfuly, Proceed to login');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have been logged out successfuly ');
    }


    function get_user()
    {
        $res = User::where('username', $_GET['username'])->first(['id', 'username']);
        if ($res->id == auth()->user()->id) {
            abort(404);
        }
        if (!$res) {
            abort(404);
        }
        return response($res);
    }


    public function changeEmail(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string'
        ])->validate();

        if (!password_verify($request->password, auth()->user()->password)) {
            return back()->with('error', 'Invalid account password, try again!');
        }

        User::where('id', auth()->user()->id)->update([
            'email' => $request->email
        ]);

        return redirect('/dashboard')->with('success', 'Your email has been updated');
    }


    function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
        ])->validate();


        $user = User::where('email', $request->email)->first();

        $reset_code = substr(rand(11111111111, 66666666676887878), 0, 6);

        // Mail::to($user->email)->send(new ResetPassword($user, $reset_code));

        return back()->with('error', 'An error occured please try again');
    }




    public function changePassword(Request $request)
    {
        Validator::make($request->all(), [
            'password' => 'confirmed|required|min:4|string',
            'current_password' => 'string|required|min:4'
        ])->validate();


        if (!password_verify($request->current_password, auth()->user()->password)) {
            return back()->with('error', 'Invalid account password, try again!');
        }

        User::where('id', auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect('/dashboard')->with('success', 'Password change successful');

    }
}
