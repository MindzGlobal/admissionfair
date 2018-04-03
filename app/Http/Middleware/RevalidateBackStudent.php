<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class RevalidateBackStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard('student')->guest())
        {
            if($request->ajax() || $request->wantsJson())
            {
                return response('Unauthorized',401);
            }
            else
            {
                return redirect()->guest('jobseeker/login');
            }
        }
        $response = $next($request);
        
        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Fri, 01 Jan 1990 00:00:00 GMT');

    }
}
