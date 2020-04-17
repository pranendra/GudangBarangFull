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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/persediaanbarang.index', 'PersediaanBarangController@index');
Route::get('/search', 'PersediaanBarangController@search');
Route::delete('/deleteall', 'PersediaanBarangController@deleteAll');
// Route::get('/crud', 'CRUDController@create');
Route::resource('persediaanbarang', 'PersediaanBarangController');
// Route::resource('cruds', 'CRUDController');
Route::get('/persediaanakhir.index', 'PersediaanAkhirController@index');
Route::get('/search', 'PersediaanAkhirController@search');
Route::delete('/deleteall', 'PersediaanAkhirController@deleteAll');
Route::resource('persediaanakhir', 'PersediaanAkhirController');