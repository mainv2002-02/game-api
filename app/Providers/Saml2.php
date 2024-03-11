<?php

namespace App\Providers;

use Slides\Saml2\ServiceProvider;

class Saml2 extends ServiceProvider
{
    public function boot():void
    {
        $this->bootMiddleware();
        $this->bootRoutes();
        $this->bootPublishes();
        $this->bootCommands();
        $this->loadMigrations();
    }

    protected function bootMiddleware():void
    {
//        $this->app['router']->aliasMiddleware('saml2.resolveTenant', \Slides\Saml2\Http\Middleware\ResolveTenant::class);
    }
}
