<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
{
    if (Auth::check() && Auth::user()->role === 'user' && Auth::user()->status === 'active') {
        return $next($request);
    }
    return redirect()->route('login.form')->with('error', 'Please login to access this page.');
}

}
