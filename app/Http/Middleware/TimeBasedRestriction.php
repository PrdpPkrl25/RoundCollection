<?php

namespace App\Http\Middleware;

use App\Model\Quotation;
use App\Model\Round;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;

class TimeBasedRestriction
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
        $quotation=Quotation::where('round_id',$round->id)->where('user_id',Auth::id())->first();
        $previousWinnerRoundIds=Round::where('game_id',$round->game->id)->whereNotNull('winner_quotation_id')->pluck('winner_quotation_id')->toArray();
        $userIds=Quotation::whereIn('id',$previousWinnerRoundIds)->pluck('user_id')->toArray();
        if (in_array(Auth::id(),$userIds)){
            flash('You are not eligible to open this link')->error();
            return redirect()->route('games.show',$round->game->id);
        }

        if(!Carbon::now()->isBetween(Carbon::parse($round->quotation_open_time),Carbon::parse($round->quotation_end_time))||$quotation){
            flash('This link is no longer valid')->error();
            return redirect()->route('games.show',$round->game->id);
        }
        return $next($request);
    }
}
