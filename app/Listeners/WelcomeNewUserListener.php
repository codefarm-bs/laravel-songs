<?php

namespace App\Listeners;

use App\Events\NewUserRegeisteredEvent;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeNewUserListener
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\NewUserRegeisteredEvent  $event
     * @return void
     */
    public function handle(NewUserRegeisteredEvent $event)
    {
        Mail::to($event->user)->send(new WelcomeNewUserMail());
    }
}
