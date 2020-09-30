<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MustChangePassword
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
        if(Auth::user()->must_change_password){
            flash('You need to change your password before continuing. Enter your email below')->warning();
            return redirect()->route('password.request');
        }
        return $next($request);
    }
}
