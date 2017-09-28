<?php
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['prefix' => 'daftar'], function (){

    Route::get('menu', [
        'uses' => 'MenuController@daftar',
        'as' => 'daftar.menu'
    ]);

    Route::get('post/{menu_id}', [
        'uses' => 'PostController@daftar',
        'as' => 'daftar.post.menu'
    ]);

    Route::get('post/{menu_id}/{post_id}', [
        'uses' => 'PostController@daftar',
        'as' => 'daftar.post.post'
    ]);

    Route::get('pegawai', [
        'uses' => 'PegawaiController@daftar',
        'as' => 'daftar.pegawai'
    ]);

    Route::get('prodi', [
        'uses' => 'ProdiController@daftar',
        'as' => 'daftar.prodi'
    ]);

});

Route::group(['prefix' => 'tambah'], function (){

    Route::post('menu', [
        'uses' => 'MenuController@tambah',
        'as' => 'tambah.menu'
    ]);

    Route::post('post', [
        'uses' => 'PostController@tambah',
        'as' => 'tambah.post'
    ]);

    Route::post('pegawai', [
        'uses' => 'PegawaiController@tambah',
        'as' => 'tambah.pegawai'
    ]);

    Route::post('prodi', [
        'uses' => 'ProdiController@tambah',
        'as' => 'tambah.prodi'
    ]);

});

Route::group(['prefix' => 'hapus'], function (){

    Route::post('menu', [
        'uses' => 'MenuController@hapus',
        'as' => 'hapus.menu'
    ]);

    Route::post('pegawai', [
        'uses' => 'PegawaiController@hapus',
        'as' => 'hapus.pegawai'
    ]);

});

Route::group(['prefix' => 'update'], function (){

    Route::post('menu', [
        'uses' => 'MenuController@update',
        'as' => 'update.menu'
    ]);

    Route::post('pegawai', [
        'uses' => 'PegawaiController@update',
        'as' => 'update.pegawai'
    ]);

    Route::post('prodi', [
        'uses' => 'ProdiController@update',
        'as' => 'update.prodi'
    ]);

});