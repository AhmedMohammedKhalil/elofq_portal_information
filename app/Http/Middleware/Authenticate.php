<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if ($request->is('admin') || $request->is('admin/*')) {
            if (Auth::guard('admin')->check())
                return $next($request);
            return redirect('/');
        }

        if ($request->is('doctor') || $request->is('doctor/*')) {
            if (Auth::guard('doctor')->check())
                return $next($request);
            return redirect('/');
        }


        if ($request->is('nurse') || $request->is('nurse/*')) {
            if (Auth::guard('nurse')->check())
                return $next($request);
            return redirect('/');
        }

        if ($request->is('patient') || $request->is('patient/*')) {
            if (Auth::guard('patient')->check())
                return $next($request);
            return redirect('/');
        }
        return $next($request);
    }
}
