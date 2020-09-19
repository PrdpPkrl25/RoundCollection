<?php

namespace App\Repository;


use App\Model\Game;
use App\Model\Round;
use Carbon\Carbon;

class GameRepository
{



    public function handleCreate($game)
    {
        $total_months=$game->number_of_participants;
        $game->end_date=Carbon::parse($game->start_date)->addMonths($total_months)->format('Y-m-d');
        $game->user_id=auth()->id();
        $game->save();
        $this->createRound($game);
        return $game;
    }

    public function createRound($game){
    for($i=1;$i<=$game->number_of_participants;$i++){
        Round::create([
            'game_id'=>$game->id,
            'round_number'=>$i,
            'quotation_open_time'=>Carbon::parse($game->start_date)->addMonths($i)->format('Y-m-'.$game->quotation_day.' '.$game->quotation_time),
            'quotation_end_time'=>Carbon::parse($game->start_date)->addMonths($i)->format('Y-m-'.$game->quotation_day.' '.$game->quotation_time),
            'round_open_time'=>Carbon::parse($game->start_date)->addMonths($i)->format('Y-m-'.$game->opening_day.' '.$game->opening_time),
            'bhupa_amount'=>$game->bhupa_amount,
        ]);
    }

    }
}
