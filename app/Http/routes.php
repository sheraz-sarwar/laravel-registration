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
use Illuminate\Routing\Router;

$router->group(['prefix' => 'user'], function (Router $router) {
    $router->get('register', ['as' => 'user.register', 'uses' => 'UserController@register']);
});

Route::get('/', function () {
    return view('welcome');
});
