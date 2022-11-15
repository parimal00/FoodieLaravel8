<?php

namespace App\Listeners;

use App\Events\Jack;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Hello
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
     * @param  \App\Events\Jack  $event
     * @return void
     */
    public function handle(Jack $event)
    {
        dd('waaaa');
    }
}
