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

Route::group(['middleware' => 'xml'], function() {
	Route::get('/', 'DashboardController@index')->name('dashboard');
});

Route::prefix('maestros')->group(function () {
	Route::get('clientes', 'ClientesController@index')->name('maestros.clientes')->middleware('auth');
	Route::get('clientes/editar', 'ClientesController@show')->name('maestros.clientes.editar')->middleware('auth');
});
