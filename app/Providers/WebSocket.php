<?php

namespace App\Providers;

use BeyondCode\LaravelWebSockets\WebSocketsServiceProvider;

class WebSocket extends WebSocketsServiceProvider
{
    protected function registerRoutes(): WebSocket
    {
        return $this;
    }
}