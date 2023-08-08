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
    return view('welcome');
});

Route::match(['get', 'head'], '/archivos', 'fileController@index')->name('archivos.index');
Route::match(['get', 'head'], '/newFile', 'fileController@create')->name('create.archivo');
Route::post('/storeFile', 'fileController@store')->name('guardar.archivo');
