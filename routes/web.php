<?php

/** @var Router $router */

use Laravel\Lumen\Routing\Router;


$router->group([
                   'prefix'     => '',
                   'middleware' => [
                   ],
               ], function () use ($router) {
    $router->get('/login', 'AuthController@login');
    $router->post('/login', 'AuthController@doLogin');

    $router->get('/auth/facebook', 'FbAuthController@redirectToProvider');
    $router->get('/auth/facebook/callback', 'FbAuthController@handleProviderCallback');
});


$router->group([
                   'prefix'     => 'track',
                   'middleware' => [
                   ],
               ], function () use ($router) {
    $router->get('/{trackId}/question/{questionId}', 'GameController@show');
    $router->get('/{trackId}/question/{questionId}', 'GameController@answer');
});