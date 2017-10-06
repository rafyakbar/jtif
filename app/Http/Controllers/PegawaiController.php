<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PegawaiController extends Controller
{
    public function daftar()
    {
        return view('admin.pegawai');
    }

    public function update(Request $request)
    {
        $pegawai = Pegawai::find($request->old_id);
        $pegawai->update([
            'id' => $request->id,
            'prodi_id' => $request->prodi_id,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        if (Input::has('dir')){
            $this->validate($request, [
                'dir' => 'image|mimes:jpeg,jpg'
            ]);

            $image = Image::make(Input::file('dir'));
            $sisi = ($image->width() > $image->height()) ? $image->height() : $image->width();
            $image->crop($sisi, $sisi)->save('img/carousel/'.$pegawai->id.'.'.$request->file('dir')->extension());
            $pegawai->dir = 'img/carousel/'.$pegawai->id.'.'.$request->file('dir')->extension();
            $pegawai->save();

            return back()->with('message', 'Berhasil memperbarui data '.$request->nama.' (dengan foto)');
        }

        return back()->with('message', 'Berhasil memperbarui data '.$request->nama);;
    }

    public function tambah(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        $pegawai = Pegawai::create([
            'id' => $request->id,
            'prodi_id' => $request->prodi_id,
            'nama' => $request->nama,
            'jenis_kelamin' => 'Pria',
            'jabatan' => $request->jabatan,
        ]);

        if (Input::has('dir')){
            $image = Image::make(Input::file('dir'));
            $sisi = ($image->width() > $image->height()) ? $image->height() : $image->width();
            $image->crop($sisi, $sisi)->save('img/carousel/'.$pegawai->id.'.'.$request->file('dir')->extension());
            $pegawai->dir = 'img/carousel/'.$pegawai->id.'.'.$request->file('dir')->extension();
            $pegawai->save();
        }

        return back()->with('message', 'Berhasil menambahkan '.$request->nama);
    }

    public function hapus(Request $request)
    {
        Pegawai::find($request->id)->delete();

        return back();
    }
}
