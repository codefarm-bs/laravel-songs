<?php

namespace App\Listeners;

use App\Mail\NewSongCreatedMail;
use App\Events\NewSongCreatedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyNewSongCreatedListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param \App\Events\NewSongCreatedEvent $event
     * @return void
     */
    public function handle(NewSongCreatedEvent $event)
    {
        sleep(10);

        Mail::to('admin@admin.com')->send(new NewSongCreatedMail(
            $event->user,
            $event->song
        ));
    }
}

