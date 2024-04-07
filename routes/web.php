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
    $router->get('/gift2', 'HomeController@gift2');

    $router->get('/1/track1/1', 'GameController@track1nv11');
    $router->get('/1/track1/2', 'GameController@track1nv12');
    $router->get('/1/track1/3', 'GameController@track1nv13');
    $router->get('/1/track1/4', 'GameController@track1nv14');

    $router->get('/1/track2/1', 'GameController@track2nv11');
    $router->get('/1/track2/2', 'GameController@track2nv12');
    $router->get('/1/track2/3', 'GameController@track2nv13');
    $router->get('/1/track2/4', 'GameController@track2nv14');
    $router->get('/1/track2/5', 'GameController@track2nv15');

    $router->get('/1/track3/1', 'GameController@track3nv11');
    $router->get('/1/track3/2', 'GameController@track3nv12');
    $router->get('/1/track3/3', 'GameController@track3nv13');
    $router->get('/1/track3/4', 'GameController@track3nv14');
    $router->get('/1/track3/5', 'GameController@track3nv15');
    $router->get('/1/track3/6', 'GameController@track3nv16');
    $router->get('/1/track3/7', 'GameController@track3nv17');

    $router->get('/2/track1/1', 'GameController@track1nv21');
    $router->get('/2/track1/2', 'GameController@track1nv22');
    $router->get('/2/track1/3', 'GameController@track1nv23');
    $router->get('/2/track1/4', 'GameController@track1nv24');

    $router->get('/2/track2/1', 'GameController@track2nv21');
    $router->get('/2/track2/2', 'GameController@track2nv22');
    $router->get('/2/track2/3', 'GameController@track2nv23');
    $router->get('/2/track2/4', 'GameController@track2nv24');

    $router->get('/2/track3/1', 'GameController@track3nv21');
    $router->get('/2/track3/2', 'GameController@track3nv22');
    $router->get('/2/track3/3', 'GameController@track3nv23');
    $router->get('/2/track3/4', 'GameController@track3nv24');
    $router->get('/2/track3/5', 'GameController@track3nv25');

    $router->get('/game/question', 'GameController@question');
    $router->post('/game/question', 'GameController@question');
    $router->get('/game/records', 'GameController@getRecords');


    $router->get('/login', 'AuthController@login');
    $router->post('/login', 'AuthController@doLogin');

    $router->get('/logout', 'AuthController@logout');
    $router->get('/auth/callback', 'AuthController@callback');
    $router->post('/auth/callback', 'AuthController@callback');
});

