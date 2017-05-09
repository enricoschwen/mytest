<?php

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

$app->get('/', function () use ($app) {
    return 'Start App <a href="/login">Login</a>';
});

$app->get('login', 'LoginController@show');


$app->post('login', 'LoginController@login');

$app->get('form', 'FormController@show');


$app->get('logout', function () {
    return 'Start App <a href="/">Home</a>';
});