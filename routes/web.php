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

Route::get('/', 'PostController@beritaHome')->name('beranda');

Route::get('/prodi', function () {
    return view('user.prodi');
})->name('prodi');

Route::get('/dosenstaff', function () {
    return view('user.dosenstaff');
})->name('dosenstaff');

Route::get('/sarana', function () {
    return view('user.sarana');
})->name('sarana');

Route::get('/listlain/{menu_id}', function (\Illuminate\Http\Request $request) {
    $menu = \App\Menu::find($request->menu_id);
    if ($menu->banyak_konten) {
        return view('user.listLain', [
            'nama' => $menu->nama,
            'post' => \App\Post::where('menu_id', $request->menu_id)->orderBy('created_at', 'desc')->paginate(4)
        ]);
    } else {
        return view('user.lain', [
            'post' => \App\Post::where('menu_id', $request->menu_id)->first()
        ]);
    }
})->name('listlain');

Route::get('/lain/{post_id}/', function (\Illuminate\Http\Request $request) {
    return view('user.lain', [
        'post' => \App\Post::find($request->post_id)
    ]);
})->name('lain');

Route::post('tambah/kritik_dan_saran', 'KritikSaranController@tambah')->name('tambah.kritik_dan_saran');

Route::post('hapus/kritik_dan_saran', 'KritikSaranController@hapus')->name('hapus.kritik_dan_saran');

Route::post('hapus/semua/kritik_dan_saran', 'KritikSaranController@hapusSemua')->name('hapus.semua.kritik_dan_saran');

Route::get('(menu_id)', function (\Illuminate\Http\Request $request) {

});