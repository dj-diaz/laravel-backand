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

Route::get('/', 'TodoController@index');


Route::post('/', 'TodoController@store');

Route::delete('/{id}', 'TodoController@delete');


Route::get('/{id}', 'TodoController@edit');
Route::put('/{id}', 'TodoController@put');
