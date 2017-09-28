<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function daftar()
    {
        return view('admin.menu');
    }

    public function tambah(Request $request)
    {
        Menu::cekDuplikasi($request->nama);

        $id = Menu::create([
            'nama' => $request->nama,
            'banyak_konten' => $request->banyak_konten
        ]);

        if ($request->banyak_konten){
            Post::create([
                'user_id' => Auth::user()->id,
                'menu_id' => $id,
                'judul' => '-',
                'isi' => 'Paragraf 1<br>(letakkan foto di antar enter)<br>Paragraf 2'
            ]);
        }

        return back();
    }

    public function update(Request $request)
    {
        Menu::find($request->id)->update([
            'nama' => $request->nama,
            'banyak_konten' => $request->banyak_konten
        ]);

        return back();
    }

    public function hapus(Request $request)
    {
        Menu::find($request->id)->delete();

        return back();
    }
}
