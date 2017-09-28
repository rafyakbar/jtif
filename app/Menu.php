<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $fillable = [
        'nama', 'banyak_konten', 'created_at', 'updated_at'
    ];

    public $timestamps = false;

    public function post()
    {
        $this->hasMany('App\Post', 'menu_id')->get();
    }

    public static function cekDuplikasi($nama)
    {
        foreach (self::all() as $item){
            if (strtolower($item->nama) == strtolower($nama)){
                return back()->with('message', 'Terdapat duplikasi menu!');
            }
        }
    }
}
