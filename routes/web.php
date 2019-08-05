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

// RUTAS PARA PLESK
// Route::get('/instalar', function(){
//     Artisan::call("storage:link");
//     Artisan::call("migrate");
// });

// INDEX
Route::get('/',      'UserController@index');
Route::get('/index', 'UserController@index');
Route::get('/home',  'UserController@index');

// LOGIN Y REGISTRO
Auth::routes();

// QUIENES SOMOS
Route::get('/quienes_somos', 'UserController@quienes_somos');

// PREGUNTAS FRECUENTES
Route::get('/faq', 'UserController@faq');

// CONTACTO
Route::get('/contacto', 'UserController@contacto');

// MI CUENTA
Route::get('/cuenta',               'UserController@show')    ->middleware('auth');
Route::get('/cuenta/editar/{id}',   'UserController@edit')    ->middleware('auth');
Route::post('/cuenta/editar/{id}',  'UserController@update')  ->middleware('auth');
Route::get('/cuenta/eliminar/{id}', 'UserController@destroy') ->middleware('auth');

// DIRECCIONES
Route::get('/direcciones',               'AddressController@index')   ->middleware('auth');
Route::get('/direcciones/agregar',       'AddressController@create')  ->middleware('auth');
Route::post('/direcciones/agregar',      'AddressController@store')   ->middleware('auth');
Route::get('/direcciones/editar/{id}',   'AddressController@edit')    ->middleware('auth');
Route::post('/direcciones/editar/{id}',  'AddressController@update')  ->middleware('auth');
Route::get('/direcciones/eliminar/{id}', 'AddressController@destroy') ->middleware('auth');

// PRODUCTOS
Route::get('/productos',               'ProductController@index');
Route::get('/productos/rostro',        'ProductController@rostro');
Route::get('/productos/cuerpo',        'ProductController@cuerpo');
Route::get('/productos/agregar',       'ProductController@create') ->middleware('auth');
Route::post('/productos/agregar',      'ProductController@store')  ->middleware('auth');
Route::get('/productos/{id}',          'ProductController@show');
Route::get('/productos/editar/{id}',   'ProductController@edit')   ->middleware('auth');
Route::post('/productos/editar/{id}',  'ProductController@update') ->middleware('auth');
Route::get('/productos/eliminar/{id}', 'ProductController@destroy')->middleware('auth');

// CARRITO
Route::get('/carrito',                'CartController@index')  ->middleware('auth');
Route::post('/carrito/agregar',       'CartController@store')  ->middleware('auth');
Route::post('/carrito/eliminar/{id}', 'CartController@destroy')->middleware('auth');
Route::post('/carrito/cerrado',       'CartController@cerrado')->middleware('auth');

// HISTORIAL
Route::get('/historial', 'CartController@historial')->middleware('auth');
