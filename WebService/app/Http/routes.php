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

Route::auth();
Route::post('/login', 'UserController@login');
Route::resource('users', 'UserController');
Route::resource('users.anuncios', 'UserAnuncioController',['except'=>['show']]);
Route::resource('anuncios', 'AnuncioController',['only'=>['index','show']]);
Route::resource('centros_educativos', 'CentroEducativoController');
Route::resource('inmuebles', 'InmuebleController');
