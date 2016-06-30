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
});



