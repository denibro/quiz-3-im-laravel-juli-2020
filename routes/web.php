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
    return view('layouts.gambar');
});

Route::get('/proyek/create', 'proyekController@create'); // menampilkan halaman form
Route::post('/items', 'proyekController@store'); // menyimpan data
Route::get('/items', 'proyekController@index'); // menampilkan semua
Route::get('/items/{id}', 'proyekController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'proyekController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'proyekController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'proyekController@destroy'); // menghapus data dengan id