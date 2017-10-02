<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prasarana;

class PrasaranaController extends Controller
{
    public function daftar()
    {
        return view('admin.prasarana');
    }

    public function tambah(Request $request)
    {
        Prasarana::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);

        return back();
    }

    public function update(Request $request)
    {
        Prasarana::find($request->id)->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);

        return back();
    }

    public function hapus(Request $request)
    {
        Prasarana::find($request->id)->delete();

        return back();
    }
}
