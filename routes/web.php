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

Route::get('faizal', function () {
    return view('faizal');
});

Route::get('halo', function () {
    return view('halo');
});

Route::get('halo/{nama}', function ($nama) {
    return view('halo', ['nama'=>$nama]);
});

Route::resource('dosen', 'DosenController');

Route::resource('mahasiswa', 'MahasiswaController');
Route::resource('showmahasiswa', 'MahasiswaController');
Route::resource('buku', 'BukuController');

//TAMBAHAN 11 APRIL DARI TUTORIAL WEB
// code lain
Route::group(['prefix' => 'kendaraan'], function(){
 
	Route::get('/', 'KendaraanController@index');
	Route::get('/create', 'KendaraanController@create');
	Route::post('/store', 'KendaraanController@store');
	Route::get('/show/{id}', 'KendaraanController@show');
	Route::post('/update/{id}', 'KendaraanController@update');
	Route::get('/destroy/{id}', 'KendaraanController@destroy');
 
});
//code lain

