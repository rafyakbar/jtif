<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function daftar(Request $request)
    {
        $menu = Menu::searchByName(str_replace('_',' ',$request->menu));

        if ($menu->banyak_konten){
            return view('admin.listpost', [
                'menu_id' => $request->menu_id
            ]);
        }
        else{
            return view('admin.post', [
                'post' => Post::find($request->post_id)
            ]);
        }
    }

    public function tambah(Request $request)
    {
        Post::create([
            'user_id' => Auth::user()->id,
            'menu_id' => $request->menu_id,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'dir' => $request->dir
        ]);

        return back();
    }
}
