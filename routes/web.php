<?php

use App\Http\Controllers\WordController;

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
