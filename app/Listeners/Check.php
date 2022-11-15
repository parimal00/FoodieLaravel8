<?php

namespace App\Listeners;

use App\Events\OrderedPlacedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Check
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
     * @param  \App\Events\OrderedPlacedEvent  $event
     * @return void
     */
    public function handle(OrderedPlacedEvent $event)
    {
    
    }
}
