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

// CONTACTO
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
Route::get('/productos/agregar', 'ProductController@create');
Route::post('/productos/agregar', 'ProductController@store');
Route::get('/productos/{id}', 'ProductController@show');
Route::post('/products/{id}/editar', 'ProductController@edit');
Route::post('/cart-add', 'CartsProductController@store')->name('cart-add')->middleware('auth');
