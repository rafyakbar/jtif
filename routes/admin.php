<?php
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('carousel', function (){
    return view('admin.carousel', ['c' => 0]);
})->name('carousel');

Route::group(['prefix' => 'daftar'], function (){

    Route::get('menu', [
        'uses' => 'MenuController@daftar',
        'as' => 'daftar.menu'
    ]);

    Route::get('post/{menu}', [
        'uses' => 'PostController@daftar',
        'as' => 'daftar.post'
    ]);

    Route::get('post/{menu}/{post_id}', [
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

    Route::get('prasarana', [
        'uses' => 'PrasaranaController@daftar',
        'as' => 'daftar.prasarana'
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

    Route::post('prasarana', [
        'uses' => 'PrasaranaController@tambah',
        'as' => 'tambah.prasarana'
    ]);

    Route::post('carousel', [
        'uses' => 'CarouselController@tambah',
        'as' => 'tambah.carousel'
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

    Route::post('post', [
        'uses' => 'PostController@hapus',
        'as' => 'hapus.post'
    ]);

    Route::post('prasarana', [
        'uses' => 'PrasaranaController@hapus',
        'as' => 'hapus.prasarana'
    ]);

    Route::post('carousel', [
        'uses' => 'CarouselController@hapus',
        'as' => 'hapus.carousel'
    ]);

});

Route::group(['prefix' => 'update'], function (){

    Route::post('menu', [
        'uses' => 'MenuController@update',
        'as' => 'update.menu'
    ]);

    Route::post('post', [
        'uses' => 'PostController@update',
        'as' => 'update.post'
    ]);

    Route::post('pegawai', [
        'uses' => 'PegawaiController@update',
        'as' => 'update.pegawai'
    ]);

    Route::post('prodi', [
        'uses' => 'ProdiController@update',
        'as' => 'update.prodi'
    ]);

    Route::post('post', [
        'uses' => 'PostController@update',
        'as' => 'update.post'
    ]);

    Route::post('prasarana', [
        'uses' => 'PrasaranaController@update',
        'as' => 'update.prasarana'
    ]);
    
    Route::post('carousel', [
        'uses' => 'CarouselController@update',
        'as' => 'update.carousel'
    ]);

});