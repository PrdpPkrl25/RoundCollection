<?php

namespace App\Http\Middleware;

use App\Game;
use Closure;

class InvitePlayers
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
        $gameId=$request->route('game_id');
        $game=Game::where('id',$gameId)->first();
        $players=$game->players()->get();
        session()->put('game',$game);
        if($players->isEmpty())
        {
            return redirect()->route('players.create');
        }
        return $next($request);
    }
}
