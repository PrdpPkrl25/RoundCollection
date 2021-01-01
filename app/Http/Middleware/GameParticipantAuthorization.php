<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GameParticipantAuthorization
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
        $game=$request->route('game');
        $participantsIds=$game->participants->pluck('id')->toArray();
        if(!in_array(Auth::id(),$participantsIds)){
            flash('You are not authorized to visit this page!')->error();
            return redirect()->back();
        }
        return $next($request);
    }
}
