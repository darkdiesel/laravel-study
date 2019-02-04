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

Route::get('/', 'IndexController@index')->name('home');

Route::get('user/all', 'UserController@all')->name('users_list');

Route::get('user/{id}', 'UserController@show')->name('user_personal');

Route::get('news', 'PostController@all')->name('news');

Route::get('/post/create', 'PostController@create')->name('post_create');
Route::post('/post/save', 'PostController@save')->name('post_save');

Route::get('news/{page}', 'PostController@all');
