<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function beritaHome(){
        return view('user.home', [
            'berita' => \App\Post::where('menu_id','1')->orderBy('created_at','desc')->paginate(3)
        ]);
    }

    public function daftar(Request $request)
    {
        $menu = Menu::searchByName(str_replace('_',' ',$request->menu));

        if ($menu->banyak_konten && is_null($request->post_id)){
            return view('admin.listpost', [
                'menu_id' => $menu->id
            ]);
        }
        else{
            if (!$menu->banyak_konten){
                $request->post_id = Post::where('menu_id','=',$menu->id)->first()->id;
            }
            return view('admin.post', [
                'post' => Post::find($request->post_id),
            ]);
        }
    }

    public function tambah(Request $request)
    {
        $post = Post::create([
            'user_id' => Auth::user()->id,
            'menu_id' => $request->menu_id,
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        if (Input::has('dir')){
            $nama = $request->file('dir')->getClientOriginalName();
            $nama = 'post_'.$post->id.'_'.str_replace(' ','_',$nama);
            $post->update([
                'dir' => 'etc/post/'.$nama
            ]);
            Input::file('dir')->move('etc/post', $nama);
        }

        return back();
    }

    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $post->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        if (Input::has('dir')){
            $nama = $request->file('dir')->getClientOriginalName();
            $nama = 'post_'.$post->id.'_'.str_replace(' ','_',$nama);
            if (!is_null($post->dir))
                if (file_exists($post->dir))
                    unlink($post->dir);
            $post->update([
                'dir' => 'etc/post/'.$nama
            ]);
            Input::file('dir')->move('etc/post', $nama);
        }

        return back();
    }

    public function hapus(Request $request)
    {
        Post::find($request->id)->delete();

        return back();
    }
}
