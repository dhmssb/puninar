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


$router->group(['prefix' => 'api/location'], function()use ($router){
$router->get('/','LocationController@index');
$router->get('/{id}','LocationController@show');
$router->post('/add','LocationController@store');
$router->put('/update/{id}','LocationController@update');
$router->delete('/delete/{id}','LocationController@destroy');




    });

$router->group(['prefix' => 'api/corporation'], function()use ($router){
    $router->get('/','CorporationController@index');
    $router->get('/{id}','CorporationController@show');


    });
