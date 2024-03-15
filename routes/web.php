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

    $router->get('/update-profile', 'AuthController@getUpdateProfile');
    $router->post('/update-profile', 'AuthController@postUpdateProfile');

    $router->get('/logout', 'AuthController@logout');
    $router->get('/auth/callback', 'AuthController@callback');
    $router->post('/auth/callback', 'AuthController@callback');
});


$router->group([
                   'prefix'     => 'games',
                   'middleware' => [
                   ],
               ], function () use ($router) {
    $router->get('/', 'GameController@heroList');
    $router->get('/hero/{heroId}/{heroSlug}', 'GameController@heroDetail');
    $router->get('/track/{trackId}/{trackSlug}', 'GameController@trackDetail');
    $router->get('/question/{questionId}/{questionSlug}', 'GameController@questionDetail');
    $router->get('/{questionId}/{slug}', 'GameController@show');
    $router->post('/{questionId}/{slug}', 'GameController@answer');
});