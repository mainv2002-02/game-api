<?php

/** @var Router $router */

use Laravel\Lumen\Routing\Router;


$router->group([
                   'prefix'     => '',
                   'middleware' => [
                   ],
               ], function () use ($router) {
    $router->get('/', 'HomeController@index');
    $router->get('/login', 'AuthController@login');
    $router->post('/login', 'AuthController@doLogin');
    $router->get('/logout', 'AuthController@logout');
    $router->get('/auth/callback', 'AuthController@callback');
});


$router->group([
                   'prefix'     => 'questions',
                   'middleware' => [
                   ],
               ], function () use ($router) {
    $router->get('/{questionId}/{slug}', 'GameController@show');
    $router->post('/{questionId}/{slug}', 'GameController@answer');
});