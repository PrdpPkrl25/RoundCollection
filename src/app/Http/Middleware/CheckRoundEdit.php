<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoundEdit
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
        $round=$request->route('round');

        if($round->quotation_open_time<now()){
            flash('Quotation start time has started, you cannot edit round now. Contact Admin Panel !')->error();
            return redirect()->route('games.show',$round->game->id);
        }

        if(!$round->game->user_id=Auth::id()){
            flash('You are not authorized to visit this page!')->error();
            return redirect()->route('games.show',$round->game->id);
        }
        return $next($request);
    }
}
