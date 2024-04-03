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
    $router->get('/track2', 'GameController@track2');

    $router->get('/game/question', 'GameController@question');
    $router->post('/game/question', 'GameController@question');
    $router->get('/game/records', 'GameController@getRecords');

//SSO
    $router->get('/saml2/sso/login', 'AuthController@login');
    $router->post('/saml2/sso/acs', 'AuthController@acs');
    $router->post('/auth/callback', 'AuthController@acs');
});

