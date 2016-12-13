<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::Check()) {
            return redirect('/home');
        }
        if (Auth::user()->role <> $role) {
            return redirect('/home');
        }

        

        return $next($request);


    }
}
