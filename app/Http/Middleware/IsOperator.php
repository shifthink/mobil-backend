<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class IsOperator
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
        if (Auth::user() && Auth::user()->roles_id == 2) {
            return $next($request);
        }

        return redirect('/');
    }
}
