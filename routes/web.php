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


Route::get('/', 'productsController@index');
Route::get('add-product', 'productsController@getCategoryList');
Route::get('products-list','productsController@getProductsList');
Route::post('store-product', 'productsController@store');
Route::get('customer','productsController@customer');
Route::get('search', 'productsController@search');