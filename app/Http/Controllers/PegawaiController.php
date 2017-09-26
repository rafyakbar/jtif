<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use Illuminate\Support\Facades\Input;

class PegawaiController extends Controller
{
    public function daftar()
    {
        return view('admin.pegawai');
    }

    public function update(Request $request)
    {
        Pegawai::find($request->old_id)->update([
            'id' => $request->id,
            'prodi_id' => $request->prodi_id,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        if (Input::has('dir')){
            $this->validate($request, [
                'dir' => 'image|mimes:jpeg,jpg|max:2048'
            ]);

            $nama_file = $request->id . '_' . Pegawai::find($request->id)->updated_at . '.jpg';
            $nama_file = str_replace(' ', '_', $nama_file);
            $nama_file = str_replace(':', '-', $nama_file);
            Input::file('dir')->move('img/pegawai', $nama_file);

            Pegawai::find($request->id)->update([
                'dir' => 'img/pegawai/'.$nama_file
            ]);

            return back()->with('message', 'Berhasil memperbarui data '.$request->nama.' (dengan foto)');
        }

        return back()->with('message', 'Berhasil memperbarui data '.$request->nama);;
    }

    public function hapus(Request $request)
    {
        Pegawai::find($request->id)->delete();

        return back();
    }
}
