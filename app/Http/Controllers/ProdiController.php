<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;
use Illuminate\Support\Facades\Input;

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
            'keterangan' => $request->keterangan
        ]);

        if (Input::has('dir')){
            Prodi::find($request->id)->update([
                'dir' => 'etc/prodi/'.str_replace(' ','_',$request->file('dir')->getClientOriginalName())
            ]);
            if (!is_null(Prodi::find($request->id)->dir))
                if (file_exists(Prodi::find($request->id)->dir))
                    unlink(Prodi::find($request->id)->dir);
            Input::file('dir')->move('etc/prodi', str_replace(' ','_',$request->file('dir')->getClientOriginalName()));
        }

        return back();
    }

    public function tambah(Request $request)
    {
        $prodi = $prodi = Prodi::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
        ]);

        if (Input::has('dir')){
            Input::file('dir')->move('etc/prodi', str_replace(' ','_',$request->file('dir')->getClientOriginalName()));
            $prodi->update([
                'dir' => 'etc/prodi/'.str_replace(' ','_',$request->file('dir')->getClientOriginalName())
            ]);
        }

        return back();
    }

    public function hapus(Request $request)
    {
        Prodi::find($request->id)->delete();

        return back();
    }
}
