<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('category', 'Admin\CategoryController@index');
Route::get('category/create', 'Admin\CategoryController@create');
Route::get('category/{cat}', 'Admin\CategoryController@edit');
Route::POST('category', 'Admin\CategoryController@store');
Route::patch('category/{category}','Admin\CategoryController@update');
Route::delete('category/{category}','Admin\CategoryController@destroy');

Route::get('products', 'Admin\ProductController@index');
Route::get('products/create', 'Admin\ProductController@create');
Route::get('products/{prod}', 'Admin\ProductController@edit');
Route::get('products/{prod}/show', 'Admin\ProductController@show');
Route::POST('products', 'Admin\ProductController@store');
Route::patch('products/{prod}','Admin\ProductController@update');
Route::get('/detail-products', 'Admin\ProductController@detail_products');
Route::delete('products/{prod}','Admin\ProductController@destroy');

Route::get('order', 'Admin\OrderController@index');


Route::get('/','Front\HomeController@index');
