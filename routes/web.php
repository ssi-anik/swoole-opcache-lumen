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

$router->get('/', function () use ($router) {
    return [
        'framework' => 'Lumen',
        'version' => $router->app->version(),
    ];
});

$router->get('users', function () {
    if(!$users = app('cache')->get('users')) {
        app('cache')->put('users', $users = \App\User::take(50)->offset(1000)->get(), 0.17);
    }

    return [
        'users' => $users,
    ];
});
