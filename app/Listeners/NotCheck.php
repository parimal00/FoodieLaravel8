<?php

namespace App\Listeners;

use App\Events\Check;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotCheck
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
     * @param  \App\Events\Check  $event
     * @return void
     */
    public function handle(Check $event)
    {
        dd('waaa');
    }
}
