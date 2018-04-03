<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        switch ($guard) {
            case 'college':
                $link = '/college/demo';
                break;           

            case 'student':
                $link = '/student/profile';
                break;
            
            default:
                $link = 'college/dashboard';
                break;
        }

        if (Auth::guard($guard)->check()) {
            return redirect($link);
        }

        return $next($request);
    }
}
