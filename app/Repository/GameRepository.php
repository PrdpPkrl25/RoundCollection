<?php

namespace App\Repository;


use App\Model\Game;
use App\Model\Quotation;
use App\Model\Round;
use App\Service\RoundService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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

            $roundArray=['game_id'=>$game->id,
                'round_number'=>$i,
                'quotation_open_time'=>Carbon::parse($game->start_date)->addMonths($i)->format('Y-m-'.$game->quotation_day.' '.$game->quotation_time),
                'round_open_time'=>Carbon::parse($game->start_date)->addMonths($i)->format('Y-m-'.$game->opening_day.' '.$game->opening_time),
                'bhupa_amount'=>$game->bhupa_amount];
            $roundArray['quotation_end_time']=Carbon::parse($roundArray['quotation_open_time'])->addHours($game->quotation_length);
            Round::create($roundArray);

        }
        if($game->owner_as_first_bidder){
            $this->createFirstRound($game);
        }
    }

   public function createFirstRound($game){
        $firstRound=Round::where('game_id',$game->id)->first();
        $quotation= Quotation::create([
           'user_id'=>$game->user_id,
           'round_id'=>$firstRound->id,
           'bidding_amount'=>$game->first_bidding_amount,
           'comment'=>'Owner has been made the first bidder'
       ]);
       RoundService::updatePayment($firstRound,$quotation);
   }

}
