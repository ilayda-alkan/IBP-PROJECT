<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CustomAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('user')) {
            return redirect()->route('login.form')->with('error', 'You must be logged in to access this page.');
        }

        return $next($request);
    }
}
