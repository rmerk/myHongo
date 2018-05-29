<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'HomeController@index');

Route::get('/user', 'UserController@index');
Route::get('/user/{user_id}', 'UserController@show');
Route::post('/user/{user_id}', 'UserController@update');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@create');



Route::get('/', function () {
    return view('welcome');
});

