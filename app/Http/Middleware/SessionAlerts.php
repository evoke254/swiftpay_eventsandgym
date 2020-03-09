<?php

namespace App\Http\Middleware;

use Closure;
use Alert;

class SessionAlerts
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
        
        if (session()->has('success_message')) 
        {
            Alert::success('Success!', session('success_message'));
        }            
        elseif (session()->has('error_message')) 
        {
            Alert::error('Error!', session('error_message'));
        }

        return $next($request);
    }
}
