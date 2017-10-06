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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::get('/', function () {
    return view('user.home');
});

Route::post('tambah/kritik_dan_saran', 'KritikSaranController@tambah')->name('tambah.kritik_dan_saran');

Route::post('hapus/kritik_dan_saran', 'KritikSaranController@hapus')->name('hapus.kritik_dan_saran');