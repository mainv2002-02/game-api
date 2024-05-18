<?php

/** @var Router $router */

use Laravel\Lumen\Routing\Router;


$router->group([
                   'prefix'     => '',
                   'middleware' => [
                   ],
               ], function () use ($router) {
    $router->get('/', 'AuthController@home');
    $router->post('/', 'AuthController@home');

    $router->get('/kickoff', 'HomeController@indexKickoff');
    $router->get('/character', 'HomeController@indexCharacter');
    $router->get('/home', 'HomeController@index');
    $router->post('/home', 'HomeController@index');
    $router->get('/gift', 'HomeController@gift');
    $router->get('/gift2', 'HomeController@gift2');
    $router->get('/bet', 'HomeController@bet');
    $router->get('/final', 'HomeController@final');
    $router->get('/demo', 'HomeController@demo');

    $router->get('/game/question', 'GameController@question');
    $router->get('/game/records', 'GameController@getRecords');

    $router->post('/games/answer', 'GameController@answer');
    $router->get('/games/{trackId}', 'GameController@trackPlaying');
    $router->post('/games/{trackId}', 'GameController@trackPlaying');
});

