<?php

/** @var Router $router */

use Laravel\Lumen\Routing\Router;


$router->group([
                   'prefix'     => '',
                   'middleware' => [
                   ],
               ], function () use ($router) {
    $router->get('/', 'AuthController@home');


//    $router->get('/', 'HomeController@indexHome');
    $router->get('/kickoff', 'HomeController@indexKickoff');
    $router->get('/character', 'HomeController@indexCharacter');
    $router->get('/home/{heroId}', 'HomeController@index');
    $router->get('/gift', 'HomeController@gift');

    $router->get('/game/question', 'GameController@question');
    $router->post('/game/question', 'GameController@question');
    $router->get('/game/records', 'GameController@getRecords');


    $router->get('/login', 'AuthController@login');
    $router->post('/login', 'AuthController@doLogin');

    $router->get('/logout', 'AuthController@logout');
    $router->get('/auth/callback', 'AuthController@callback');
    $router->post('/auth/callback', 'AuthController@callback');
});

