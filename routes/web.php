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

// INDEX
Route::get('/', 'UserController@index');
Route::get('/index', 'UserController@index');

// LOGIN Y REGISTRO
Auth::routes();

// CARRITO
Route::get('/carrito', 'CartController@index')->middleware('auth');

// QUIENES SOMOS
Route::get('/quienes_somos', 'UserController@quienes_somos');

// PREGUNTAS FRECUENTES
Route::get('/faq', 'UserController@faq');

Route::get('/contacto', 'UserController@contacto');

// MI CUENTA
Route::get('/cuenta', 'UserController@show')->middleware('auth');
Route::get('/cuenta/editar/{id}', 'UserController@edit')->middleware('auth');
Route::post('/cuenta/editar/{id}', 'UserController@update')->middleware('auth');

// DIRECCIONES
Route::get('/direcciones', 'AddressController@index')->middleware('auth');
Route::get('/direcciones/agregar', 'AddressController@create')->middleware('auth');
Route::post('/direcciones/agregar', 'AddressController@store')->middleware('auth');
Route::get('/direcciones/editar/{id}', 'AddressController@edit')->middleware('auth');
Route::post('/direcciones/editar/{id}', 'AddressController@update')->middleware('auth');
Route::get('/direcciones/eliminar/{id}', 'AddressController@destroy')->middleware('auth');

// PRODUCTOS
Route::get('/productos', 'ProductController@index');
Route::get('/productosAgregar', 'ProductController@create');
Route::post('/productosAgregar', 'ProductController@store');
Route::post('/products/edit/{id}', 'ProductController@edit');
Route::get('/product-detail/{id}', 'ProductController@show')->name('product-detail');
Route::post('/cart-add', 'CartsProductController@store')->name('cart-add')->middleware('auth');
