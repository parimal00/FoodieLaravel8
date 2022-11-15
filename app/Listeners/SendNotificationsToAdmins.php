<?php

namespace App\Listeners;

use App\Events\OrderedPlacedEvent;
use App\Notifications\NewOrderNotification;
use App\Services\UserWithRole;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotificationsToAdmins
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
        $admins = (new UserWithRole('Administrator'))->get();
        foreach ($admins as $admin) {
            $admin->notify(new NewOrderNotification($event->orders));
        }
    }
}
