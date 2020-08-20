<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/');
        // }

        if (Auth::guard($guard)->check() && $guard === 'user') {
            return redirect('/user/home');
        } elseif (Auth::guard($guard)->check() && $guard === 'manufacture') {
            return redirect('/manufacture/home');
        }

        // if (Auth::guard($guard)->check()) {
        //     if(strcmp($guard, 'manufacture') == 0 ){
        //       return redirect('/manufacture/home');
        //     }
        //     return redirect('/home');
        //   }


        return $next($request);
    }
}