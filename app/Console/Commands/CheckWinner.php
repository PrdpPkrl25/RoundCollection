<?php

namespace App\Console\Commands;

use App\Model\Notification;
use App\Model\Quotation;
use App\Model\Round;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class CheckWinner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:winner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the winning bidder from each round';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $rounds=Round::where('quotation_end_time','<',now()->format('Y-m-d H:i'))->whereNull('winner_quotation_id')->get();
        foreach ($rounds as $round){
            $maxValue=$round->quotations->max('bidding_amount');
            $quotation=Quotation::where('round_id',$round->id)->where('bidding_amount',$maxValue)->get()->random(1)->values();
            $round->round_payment=($round->game->total_amount-$quotation[0]->bidding_amount-$round->bhupa_amount)/$round->game->number_of_participants;
            $round->winner_quotation_id=$quotation[0]->id;
            $round->save();
        }

        $openRounds=Round::where('round_open_time',now()->format('Y-m-d H:i'))->whereNotNull('winner_quotation_id')->get();
        foreach ($openRounds as $openRound){
            $notificationArray=['message'=>'The Round winner has been selected','user_id'=>Auth::id()];
            Notification::create($notificationArray);
        }
        return 0;
    }
}
