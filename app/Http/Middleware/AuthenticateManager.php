<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateManager
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('manager')->check()) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}


