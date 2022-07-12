<?php

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
    return $router->app->version();
});

//CRUD Obat
$router->get('obat', 'ObatController@index');
$router->post('/obat', 'ObatController@store');
$router->get('/obat/{id}', 'ObatController@show');
$router->put('/obat/{id}', 'ObatController@update');
$router->delete('/obat/{id}', 'ObatController@destroy');
