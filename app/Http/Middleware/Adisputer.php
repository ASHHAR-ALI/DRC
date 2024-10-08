<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Symfony\Component\HttpFoundation\Response;

class Adisputer
{
    /**
     * Handle an incoming request.
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    //    ------------------------- Default  Code ------------------------- //
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    

    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('againstdisputer')->check()) {
            return $next($request);
        }
        return redirect('/')->with('fail_message', 'You Have to Login First');
    }

}
