<?php

namespace App\Http\Controllers;

use App\KritikSaran;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{
    public function tambah(Request $request)
    {
        $this->validate($request, [
            'isi' => 'required|min:15'
        ]);

        KritikSaran::create([
            'isi' => $request->isi
        ]);

        return back()->with('message', 'Kritik dan saran berhasil dikirim ke admin!');
    }
}
