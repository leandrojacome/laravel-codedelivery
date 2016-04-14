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
    Route::get('categories', ['as' => 'categories.index', 'uses' => 'Admin\CategoriesController@index']);
    Route::get('categories/create', ['as' => 'categories.create', 'uses' => 'Admin\CategoriesController@create']);
    Route::post('categories/store', ['as' => 'categories.store', 'uses' => 'Admin\CategoriesController@store']);
    Route::get('categories/edit/{id}', ['as' => 'categories.edit', 'uses' => 'Admin\CategoriesController@edit']);
    Route::put('categories/update/{id}', ['as' => 'categories.update', 'uses' => 'Admin\CategoriesController@update']);
    Route::get('categories/destroy/{id}', ['as' => 'categories.destroy', 'uses' => 'Admin\CategoriesController@destroy']);

    Route::get('products', ['as' => 'products.index', 'uses' => 'Admin\ProductsController@index']);
    Route::get('products/create', ['as' => 'products.create', 'uses' => 'Admin\ProductsController@create']);
    Route::post('products/store', ['as' => 'products.store', 'uses' => 'Admin\ProductsController@store']);
    Route::get('products/edit/{id}', ['as' => 'products.edit', 'uses' => 'Admin\ProductsController@edit']);
    Route::put('products/update/{id}', ['as' => 'products.update', 'uses' => 'Admin\ProductsController@update']);
    Route::get('products/destroy/{id}', ['as' => 'products.destroy', 'uses' => 'Admin\ProductsController@destroy']);

    Route::get('clients', ['as' => 'clients.index', 'uses' => 'Admin\ClientsController@index']);
    Route::get('clients/create', ['as' => 'clients.create', 'uses' => 'Admin\ClientsController@create']);
    Route::post('clients/store', ['as' => 'clients.store', 'uses' => 'Admin\ClientsController@store']);
    Route::get('clients/edit/{id}', ['as' => 'clients.edit', 'uses' => 'Admin\ClientsController@edit']);
    Route::put('clients/update/{id}', ['as' => 'clients.update', 'uses' => 'Admin\ClientsController@update']);
    Route::get('clients/destroy/{id}', ['as' => 'clients.destroy', 'uses' => 'Admin\ClientsController@destroy']);

    Route::get('orders', ['as' => 'orders.index', 'uses' => 'Admin\OrdersController@index']);
    Route::get('orders/{id}', ['as' => 'orders.edit', 'uses' => 'Admin\OrdersController@edit']);
    Route::put('orders/update/{id}', ['as' => 'orders.update', 'uses' => 'Admin\OrdersController@update']);
    Route::get('orders/destroy/{id}', ['as' => 'orders.destroy', 'uses' => 'Admin\OrdersController@destroy']);

    Route::get('cupoms', ['as' => 'cupoms.index', 'uses' => 'Admin\CupomsController@index']);
    Route::get('cupoms/create', ['as' => 'cupoms.create', 'uses' => 'Admin\CupomsController@create']);
    Route::post('cupoms/store', ['as' => 'cupoms.store', 'uses' => 'Admin\CupomsController@store']);
    Route::get('cupoms/edit/{id}', ['as' => 'cupoms.edit', 'uses' => 'Admin\CupomsController@edit']);
    Route::put('cupoms/update/{id}', ['as' => 'cupoms.update', 'uses' => 'Admin\CupomsController@update']);
    Route::get('cupoms/destroy/{id}', ['as' => 'cupoms.destroy', 'uses' => 'Admin\CupomsController@destroy']);

});


Route::auth();

Route::get('/home', 'HomeController@index');
