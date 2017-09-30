<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;

class ProdiController extends Controller
{
    public function daftar()
    {
        return view('admin.prodi');
    }

    public function update(Request $request)
    {
        Prodi::find($request->id)->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'dir' => $request->dir
        ]);

        return back();
    }

    public function tambah(Request $request)
    {
        Prodi::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'dir' => $request->dir
        ]);

        return back();
    }

    public function hapus(Request $request)
    {
        Prodi::find($request->id)->delete();

        return back();
    }
}
