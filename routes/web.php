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

Route::prefix('{lang?}')->middleware('locale')->group(function() {
    Route::get('/', 'IndexController@index')->name('home');

    Route::get('user', 'UserController@index')->name('user.index');

    Route::get('user/{id}', 'UserController@show')->name('user.show');

    Route::group([
        'prefix' => 'post',
        'as' => 'post.'
    ], function(){
        Route::get('/', 'PostController@index')->name('index');
        Route::get('/{id}', 'PostController@show')->where('id', '[0-9]+')->name('show');

        Route::group([
            'middleware' => 'auth'
        ], function (){
            Route::get('/create', 'PostController@create')->name('create');
            Route::post('/', 'PostController@store')->name('store');
            Route::get('/{id}/edit', 'PostController@edit')->where('id', '[0-9]+')->name('edit');
            Route::put('/{id}', 'PostController@update')->where('id', '[0-9]+')->name('update');
            Route::delete('/{id}', 'PostController@destroy')->where('id', '[0-9]+')->name('destroy');
        });
    });

//Route::resource('post', 'PostController')->only(['index']);
//Route::resource('post', 'PostController')->except(['create', 'update', 'destroy']);

    Route::group([
        'middleware' => 'auth',
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'as' => 'admin.'
    ], function () {
        Route::get('/', 'IndexController@all')->name('home');
        Route::get('/users', 'UserController@all')->name('users');
        Route::get('/posts', 'PostController@all')->name('posts');
    });
});

