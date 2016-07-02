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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'MainController@index');
    Route::get('/admin/product/new', 'ProductController@newProduct');
    Route::get('/admin/products', 'ProductController@index');
    Route::get('/admin/product/destroy/{id}', 'ProductController@destroy');
    Route::post('/admin/product/save', 'ProductController@add');

    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    Route::get('/addProduct/{productId}', 'CartController@addItem');
    Route::get('/removeItem/{productId}', 'CartController@removeItem');
    Route::get('/cart', 'CartController@showCart');
});



