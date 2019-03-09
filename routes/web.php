<?php


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('logout','HomeController@logout');
Route::get('category', 'Admin\CategoryController@index');
Route::get('category/create', 'Admin\CategoryController@create');
Route::get('category/{cat}', 'Admin\CategoryController@edit');
Route::POST('category', 'Admin\CategoryController@store');
Route::patch('category/{category}','Admin\CategoryController@update');
Route::delete('category/{category}','Admin\CategoryController@destroy');

Route::get('product', 'Admin\ProductController@index');
Route::get('products/create', 'Admin\ProductController@create');
Route::get('products/{prod}', 'Admin\ProductController@edit');
Route::get('products/{prod}/show', 'Admin\ProductController@show');
Route::POST('products', 'Admin\ProductController@store');
Route::patch('products/{prod}','Admin\ProductController@update');
Route::get('/detail-products', 'Admin\ProductController@detail_products');
Route::delete('products/{prod}','Admin\ProductController@destroy');

Route::get('order', 'Admin\OrderController@index');

Route::get('/','Front\HomeController@index');
Route::get('cart','Front\ProductsController@cart');
Route::post('/cart','Front\ProductsController@add_to_cart')->name('cart');
Route::delete('cart/remove/{product}','Front\ProductsController@destroy')->name('cart.destroy');
Route::patch('/cart/update/{product}','Front\ProductsController@destroy')->name('cart.update');
Route::get('checkout','Front\ProductsController@checkout');
Route::post('/checkout','CheckoutController@store')->name('checkout');
