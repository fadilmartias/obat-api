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

//AUTH
Route::group(['prefix' => 'api', 'middleware' => ['cors']], function ($router) {
    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
    $router->post('user-profile', 'AuthController@me');

    //CRUD Obat
    Route::group(['middleware' => ['auth']], function($router) {
    $router->get('obat', 'ObatController@index');
    $router->post('/obat', 'ObatController@store');
    $router->get('/obat/{id}', 'ObatController@show');
    $router->put('/obat/{id}', 'ObatController@update');
    $router->delete('/obat/{id}', 'ObatController@destroy');
});

});


