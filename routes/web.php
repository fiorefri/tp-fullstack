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
Route::get('/carrito', 'CartController@index');

// QUIENES SOMOS
Route::get('/quienes_somos', 'UserController@quienes_somos');

// PREGUNTAS FRECUENTES
Route::get('/faq', 'UserController@faq');

Route::get('/productos', 'ProductController@index');
Route::get('/productosAgregar', 'ProductController@create');
Route::post('/productosAgregar', 'ProductController@store');

Route::get('/contacto', 'UserController@contacto');

// MI CUENTA
Route::get('/cuenta', 'UserController@cuenta')->middleware('auth');

// DIRECCIONES
Route::get('/direcciones', 'AddressController@index')->middleware('auth');
Route::get('/direcciones/agregar', 'AddressController@create');

// PRODUCTOS
Route::get('/productos', 'ProductController@index');
Route::get('/productosAgregar', 'ProductController@create');
