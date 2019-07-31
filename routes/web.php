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

Route::get('/', function () {
    return view('index');
});

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
