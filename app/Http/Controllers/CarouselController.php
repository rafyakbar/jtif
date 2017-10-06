<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use App\Carousel;

class CarouselController extends Controller
{
    public function tambah(Request $request)
    {
        $this->validate($request, [
            'keterangan' => 'required',
            'dir' => 'required'
        ]);

        ini_set("memory_limit", "512M");

        $carousel = Carousel::create([
            'keterangan' => $request->keterangan,
            'dir' => '-'
        ]);
        $image = Image::make(Input::file('dir'));
        $image->crop($image->width(), intval($image->width()/3))->save('img/carousel/'.$carousel->id.'.'.$request->file('dir')->extension());
        $carousel->dir = 'img/carousel/'.$carousel->id.'.'.$request->file('dir')->extension();
        $carousel->save();

        ini_set("memory_limit", "128M");

        return back();
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'keterangan' => 'required',
            'dir' => 'required'
        ]);

        ini_set("memory_limit", "512M");

        $carousel = Carousel::find($request->id);
        $carousel->update([
            'keterangan' => $request->keterangan
        ]);
        $image = Image::make(Input::file('dir'));
        $image->crop($image->width(), intval($image->width()/3))->save('img/carousel/'.$carousel->id.'.'.$request->file('dir')->extension());
        $carousel->dir = 'img/carousel/'.$carousel->id.'.'.$request->file('dir')->extension();
        
        ini_set("memory_limit", "128M");
        
        return back();
    }

    public function hapus(Request $request)
    {
        $carousel = Carousel::find($request->id);
        if (file_exists($carousel->dir))
            unlink($carousel->dir);
        $carousel->delete();

        return back();
    }
}
