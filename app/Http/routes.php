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


// welcome page

Route::group(['middleware' => 'web'], function() {
    Route::auth();
    Route::get('/', 'ViewController@index');

    Route::get('/api/users', function () {
        return [['id' => 1, 'name' => 'Fabi'], ['id' => 2, 'name' => 'Peter']];
    });
});