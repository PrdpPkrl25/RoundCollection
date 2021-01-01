<?php

namespace App\Console\Commands;

use App\Model\Notification;
use App\Model\Quotation;
use App\Model\Round;
use App\Service\RoundService;
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
        $currentTime=now()->format('Y-m-d H:i');
        $rounds=Round::where('quotation_end_time','<',$currentTime)->whereNull('winner_quotation_id')->get();
        foreach ($rounds as $round){
            $maxValue=$round->quotations->max('bidding_amount');
            $quotation=Quotation::where('round_id',$round->id)->where('bidding_amount',$maxValue)->get()->random(1)->values();
            RoundService::updatePayment($round,$quotation[0]);
        }

        $openRounds=Round::where('round_open_time',$currentTime)->whereNotNull('winner_quotation_id')->get();
        foreach ($openRounds as $openRound){
            $notificationArray=['message'=>'The Round winner has been selected','user_id'=>Auth::id()];
            Notification::create($notificationArray);
        }
        return 0;
    }
}
