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

const API_ROUTE_PREFIX = '/api/v1/';

Route::group(['middleware' => 'web'], function() {
    Route::auth();

    //the defaule route for the vue app
    Route::get('/', function () {
        if(Auth::check()){
            return view('default');
        } else {
            return view('welcome');
        }
    });

    //** API routes
    Route::resource(API_ROUTE_PREFIX.'user', 'UserController', ['only' => [
        'index', 'show'
    ]]);
});