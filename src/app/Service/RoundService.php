<?php


namespace App\Service;


class RoundService
{
   public static function updatePayment($round,$quotation){
       $round->round_payment=($round->game->total_amount-$quotation->bidding_amount-$round->bhupa_amount)/$round->game->number_of_participants;
       $round->winner_quotation_id=$quotation->id;
       $round->save();
   }

}
