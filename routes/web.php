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


$router->group(['prefix' => 'api'], function()use($router){
$router->post('/login','AuthController@login');
$router->post('/register','AuthController@register');
$router->post('/logout','AuthController@logout');
});


$router->group(['prefix' => 'api/location', "middleware" => 'auth'], function()use ($router){
$router->get('/','LocationController@index');
$router->get('/{id}','LocationController@show');
$router->post('/add','LocationController@store');
$router->put('/update/{id}','LocationController@update');
$router->delete('/delete/{id}','LocationController@destroy');
    });

$router->group(['prefix' => 'api/corporation', "middleware" => 'auth'], function()use ($router){
    $router->get('/','CorporationController@index');
    $router->get('/{id}','CorporationController@show');
    $router->post('/add','CorporationController@store');
    $router->put('/update/{id}','CorporationController@update');
    $router->delete('/delete/{id}','CorporationController@destroy');
    });

$router->group(['prefix' => 'api/power-unit', "middleware" => 'auth'], function()use ($router){
    $router->get('/','PowerUnitController@index');
    $router->get('/{id}','PowerUnitController@show');
    $router->post('/add','PowerUnitController@store');
    $router->put('/update/{id}','PowerUnitController@update');
    $router->delete('/delete/{id}','PowerUnitController@destroy');
    $router->delete('/get-data','PowerUnitController@getdata');

    });

$router->group(['prefix' => 'api/unit-type', "middleware" => 'auth'], function()use ($router){
    $router->get('/','PowerUnitTypeController@index');
    $router->get('/{id}','PowerUnitTypeController@show');
    $router->post('/add','PowerUnitTypeController@store');
    $router->put('/update/{id}','PowerUnitTypeController@update');
    $router->delete('/delete/{id}','PowerUnitTypeController@destroy');
    });
