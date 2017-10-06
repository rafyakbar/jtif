<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function daftar()
    {
        return view('admin.admin');
    }

    public function tambah(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'name' => 'required',
            'password' => 'required|min:5'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return back();
    }

    public function updateGeneral(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password_lama' => 'required|min:5',
            'email' => 'required'
        ]);

        if (Hash::check($request->password_lama, Auth::user()->password)) {
            Auth::user()->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
            return back()->with('message', 'Nama dan email berhasil diganti!');
        }
        return back()->with('message', 'Konfirmasi password salah!');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'password_baru' => 'required|min:5',
            'password_lama' => 'required|min:5',
            'konfirmasi_password_baru' => 'required|min:5',
        ]);

        if (Hash::check($request->password_lama, Auth::user()->password)) {
            if ($request->password_baru == $request->konfirmasi_password_baru) {
                Auth::user()->update(['password' => bcrypt($request->password_baru)]);
                return back()->with('message', 'Password berhasil disimpan!');
            }
            return back()->with('message', 'Konfirmasi password salah!');
        }
        return back()->with('message', 'Password saat ini salah!');
    }
}
