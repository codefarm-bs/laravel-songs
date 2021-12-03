<?php

namespace App\Listeners;

use App\Events\NewUserRegeisteredEvent;
use App\Mail\NewUserRegisteredMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyNewUserRegisterdListener
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\NewUserRegeisteredEvent  $event
     * @return void
     */
    public function handle(NewUserRegeisteredEvent $event)
    {
        Mail::to('admin@admin.com')->send(new NewUserRegisteredMail($event->user));
    }
}
