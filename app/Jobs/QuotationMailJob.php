<?php

namespace App\Jobs;

use App\Mail\QuotationTimeStarted;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class QuotationMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $participants;
    public $round;

    /**
     * Create a new job instance.
     *
     * @param $participants
     * @param $round
     */
    public function __construct($participants,$round)
    {
        $this->participants=$participants;
        $this->round=$round;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->participants as $participant){
            Mail::to($participant->email)->send(new QuotationTimeStarted($this->round));
        }

    }
}
