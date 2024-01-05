<?php

namespace App\Listeners;

use App\Events\SendMailEvent;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailFiredLister
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendMailEvent $event): void
    {
        $user = User::find($event->userId)->toArray();
        Mail::send('eventMail', $user, function ($message) use ($user) {

            $message->to($user['email'], 'Jhon dou');
            $message->subject('Event listener testing');
        });
    }
}
