<?php

namespace App\Providers;

use App\Listeners\Login;
use App\Listeners\Logout;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;
use Slides\Saml2\Events\SignedIn;
use Slides\Saml2\Events\SignedOut;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        SignedIn::class  => [
            Login::class . '@handle',
        ],
        SignedOut::class => [
            Logout::class . '@handle',
        ],
    ];

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
