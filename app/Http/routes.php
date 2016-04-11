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

Route::get('/', function () {
   return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth.check'], function () {
    Route::get('categories', ['as' => 'categories.index', 'uses' => 'AdminCategoriesController@index']);
    Route::get('categories/create', ['as' => 'categories.create', 'uses' => 'AdminCategoriesController@create']);
    Route::post('categories/store', ['as' => 'categories.store', 'uses' => 'AdminCategoriesController@store']);
    Route::get('categories/edit/{id}', ['as' => 'categories.edit', 'uses' => 'AdminCategoriesController@edit']);
    Route::put('categories/update/{id}', ['as' => 'categories.update', 'uses' => 'AdminCategoriesController@update']);
    Route::get('categories/destroy/{id}', ['as' => 'categories.destroy', 'uses' => 'AdminCategoriesController@destroy']);

    Route::get('products', ['as' => 'products.index', 'uses' => 'AdminProductsController@index']);
    Route::get('products/create', ['as' => 'products.create', 'uses' => 'AdminProductsController@create']);
    Route::post('products/store', ['as' => 'products.store', 'uses' => 'AdminProductsController@store']);
    Route::get('products/edit/{id}', ['as' => 'products.edit', 'uses' => 'AdminProductsController@edit']);
    Route::put('products/update/{id}', ['as' => 'products.update', 'uses' => 'AdminProductsController@update']);
    Route::get('products/destroy/{id}', ['as' => 'products.destroy', 'uses' => 'AdminProductsController@destroy']);

    Route::get('clients', ['as' => 'clients.index', 'uses' => 'AdminClientsController@index']);
    Route::get('clients/create', ['as' => 'clients.create', 'uses' => 'AdminClientsController@create']);
    Route::post('clients/store', ['as' => 'clients.store', 'uses' => 'AdminClientsController@store']);
    Route::get('clients/edit/{id}', ['as' => 'clients.edit', 'uses' => 'AdminClientsController@edit']);
    Route::put('clients/update/{id}', ['as' => 'clients.update', 'uses' => 'AdminClientsController@update']);
    Route::get('clients/destroy/{id}', ['as' => 'clients.destroy', 'uses' => 'AdminClientsController@destroy']);

    Route::get('orders', ['as' => 'orders.index', 'uses' => 'AdminOrdersController@index']);

});


Route::auth();

Route::get('/home', 'HomeController@index');
