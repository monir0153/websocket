<?php

namespace App\Listeners;

use App\Events\OrderPlaceEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderPlaceListener
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
    public function handle(OrderPlaceEvent $event): void
    {
        info($event->order);
    }
}
