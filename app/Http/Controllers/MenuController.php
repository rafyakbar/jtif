<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function daftar()
    {
        return view('admin.menu');
    }

    public function tambah(Request $request)
    {
        Menu::create([
            'nama' => $request->nama,
            'banyak_konten' => $request->banyak_konten
        ]);

        return back();
    }

    public function edit(Request $request)
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
