<?php

namespace App\Providers;

use App\Events\OrderedPlacedEvent;
use App\Listeners\SendNotificationsToAdmins;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\Check;
use App\Listeners\NotCheck;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        OrderedPlacedEvent::class => [
            SendNotificationsToAdmins::class,
        ],
        Check::class => [
            NotCheck::class,
        ],
       
        
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
