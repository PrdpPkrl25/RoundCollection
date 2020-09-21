<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuotationTimeStarted extends Mailable
{
    use Queueable, SerializesModels;
    public $round;

    /**
     * Create a new message instance.
     *
     * @param $round
     */
    public function __construct($round)
    {
        $this->round=$round;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.quotation_time_started')->with([
               'round'=>$this->round
            ]);
    }
}
