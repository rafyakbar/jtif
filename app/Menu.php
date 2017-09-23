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
}
