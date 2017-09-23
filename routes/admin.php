<?php
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'daftar'], function (){
    Route::get('menu', [
        'uses' => 'MenuController@daftar',
        'as' => 'daftar.menu'
    ]);
});

Route::group(['prefix' => 'tambah'], function (){
    Route::post('menu', [
        'uses' => 'MenuController@tambah',
        'as' => 'tambah.menu'
    ]);
});

Route::group(['prefix' => 'hapus'], function (){
    Route::post('menu', [
        'uses' => 'MenuController@hapus',
        'as' => 'hapus.menu'
    ]);
});

Route::group(['prefix' => 'edit'], function (){
    Route::post('menu', [
        'uses' => 'MenuController@edit',
        'as' => 'edit.menu'
    ]);
});