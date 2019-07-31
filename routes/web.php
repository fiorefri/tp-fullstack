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

Auth::routes();

Route::get('/', 'UserController@index');
Route::get('/index', 'UserController@index');

Route::get('/carrito', 'CartController@index');

Route::get('/quienes_somos', 'UserController@quienes_somos');

Route::get('/faq', 'UserController@faq');

Route::get('/productos', 'ProductController@index');

Route::get('/contacto', 'UserController@contacto');
