<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->group(['prefix' => 'user'], function ($router) {
    $router->get('login', ['as' => 'user.getLogin',  'uses' => 'UserController@index']);
    $router->post('login', ['as' => 'user.postLogin', 'uses' => 'UserController@login']);
});

$router->resource('user', 'UserController');

Route::get('/', function () {
    return view('welcome');
});
