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

/**
 * @param \Illuminate\Routing\Router $router
 */
$optionalLanguageRoutes = function (\Illuminate\Routing\Router $router ) {
    Auth::routes();

    Route::get( '/', 'IndexController@index' )->name( 'home' );

    // users
    Route::group([
        'prefix' => 'user',
        'as'     => 'user.',
    ], function (){
        Route::get( '/', 'UserController@index' )->name( 'index' );

        Route::get( '{user}',
            [ 'as' => 'show', 'uses' => 'UserController@show' ] );

        Route::get( '{id}/edit',
            [ 'as' => 'edit', 'uses' => 'UserController@edit' ] );

        Route::match(['put', 'patch'], '{id}',
            [ 'as' => 'update', 'uses' => 'UserController@update' ] );
    });

    // posts
    Route::group( [
        'prefix' => 'post',
        'as'     => 'post.',
    ],
        function () {
            Route::get( '/', 'PostController@index' )->name( 'index' );
            Route::get( '/{post}', 'PostController@show' )
                 ->name( 'show' );

            Route::group( [
                'middleware' => 'auth',
            ],
                function () {
                    Route::get( '/create', 'PostController@create' )
                         ->name( 'create' );
                    Route::post( '/', 'PostController@store' )
                         ->name( 'store' );
                    Route::get( '/{id}/edit', 'PostController@edit' )
                         ->name( 'edit' );
                    Route::put( '/{id}', 'PostController@update' )
                         ->name( 'update' );
                    Route::delete( '/{id}', 'PostController@destroy' )
                         ->name( 'destroy' );
                } );
        } );

    //Route::resource('post', 'PostController');
    //Route::resource('post', 'PostController')->only(['index']);
    //Route::resource('post', 'PostController')->except(['create', 'update', 'destroy']);

    Route::group( [
        'middleware' => 'auth',
        'prefix'     => 'admin',
        'namespace'  => 'Admin',
        'as'         => 'admin.',
    ],
        function () {
            Route::get( '/', 'IndexController@all' )->name( 'home' );
            Route::resource( 'users', 'UserController' );
            Route::resource( 'posts', 'PostController' );
        } );
};

Route::group( [ 'middleware' => 'locale' ], $optionalLanguageRoutes );
Route::group( [
    'prefix'     => '{locale?}',
    'middleware' => 'locale',
    'where'      => [ 'locale' => 'en|ru' ],
],
    $optionalLanguageRoutes );
