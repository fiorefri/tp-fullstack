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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index'); //Listamos productos

Route::get('/product/{id}', 'ProductController@show'); //Mostramos 1 producto

Route::post('/addtocart', 'CartController@store')->middleware('auth'); //Guardamos productos en tabla cart.
Route::get('/delete/{id}', 'CartController@destroy')->middleware('auth'); //Borramos productos del carrito.

Route::get('/cart', 'CartController@index')->middleware('auth'); //Mostramos el carrito abierto.
Route::post('/cartclose', 'CartController@cartClose')->middleware('auth');//carrito cerrado

Route::get('/history', 'CartController@history')->middleware('auth');//historial de compras
Route::get('/category/{id?}', 'ProductController@index');//categorias de productos

Route::get('/cart', 'CartController@show');//mostrar carrito

Route::get('/home', 'QuienesSomosController@index')->name('home')
=======
Route::get('/', 'UserController@index');
Route::get('/index', 'UserController@index');

Route::get('/carrito', 'CartController@index');

Route::get('/quienes_somos', 'UserController@quienes_somos');

Route::get('/faq', 'UserController@faq');

Route::get('/productos', 'ProductController@index');

Route::get('/contacto', 'UserController@contacto');
>>>>>>> e937a2bd3d7d2922d833ee32bbe381c17f3716f0
