<?php

namespace App\Http\Middleware;

use App\Model\Game;
use Closure;

class InviteParticipants
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
        $players=$game->participants()->get();
        if(count($players)<$game->number_of_participants)
        {
            return redirect()->route('participants.invite',$game->id);
        }
        return $next($request);
    }
}
