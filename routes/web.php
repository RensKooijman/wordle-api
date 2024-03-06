<?php

use App\Http\Controllers\WordController;
use App\Http\Controllers\LeaderboardController;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('index');
});

$router->get('/word', 'WordController@getWord');

$router->get('/words/all', 'WordController@getAllWords');

$router->get('/words/random', 'WordController@getWordOfDay');

$router->get('/leaderboard', 'LeaderboardController@getAll');
$router->post('/leaderboard', 'LeaderboardController@put');

$router->get('/user/{id}', 'AccountController@getUser');
$router->post('/user/create', 'AccountController@makeUser');
$router->post('/user/{id}/validate', 'AccountController@validateUser');
$router->get('/user/{id}/delete', 'AccountController@deleteUser');