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

Route::get('/', 'MedicoController@index')->name('inicio');

Route::post('/crear', 'MedicoController@store')->name('store');

Route::get('/editar/{id}', 'MedicoController@edit')->name('editar');

Route::put('/update/{id}', 'MedicoController@update')->name('update');
Route::delete('/delete/{id}', 'MedicoController@destroy')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
