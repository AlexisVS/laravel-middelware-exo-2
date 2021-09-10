<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch (Auth::user()->role_id) {
            case 1:
                return $next($request);
                break;
            case 2:
                return $next($request);
                break;
            default:
                return redirect('/');
                break;
        }
    }
}
