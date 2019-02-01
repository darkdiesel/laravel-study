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

Route::get('/', 'IndexController@index');

Route::get('user/all', 'UserController@all');

Route::get('user/{id}', 'UserController@show');

Route::get('news', 'PostController@all');

Route::get('news/{page}', 'PostController@all');
