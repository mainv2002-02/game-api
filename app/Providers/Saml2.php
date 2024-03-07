<?php
namespace App\Providers;

class Saml2 extends \Slides\Saml2\ServiceProvider
{
    public function boot()
    {
        $this->bootRoutes();
        $this->bootPublishes();
        $this->bootCommands();
        $this->loadMigrations();
    }
}
