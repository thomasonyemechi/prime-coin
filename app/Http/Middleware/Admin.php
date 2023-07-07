<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_id = auth()->user()->id;
        $admins = [1, 2, 3, 4];
        if (in_array($user_id, $admins)) {
            return $next($request);
        }
        // Auth::logout();
        return redirect('/login')->with('error', 'You cannot access this page!');
    }
}
