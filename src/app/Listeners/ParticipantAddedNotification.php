<?php

namespace App\Listeners;

use App\Events\ParticipantAdded;
use App\Model\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ParticipantAddedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ParticipantAdded  $event
     * @return void
     */
    public function handle(ParticipantAdded $event)
    {
        Notification::create([
            'message'=>'You have been added to the Dhukuti game by '.$event->game->owner->name,
            'user_id'=>$event->user->id,
        ]);
    }
}
