<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = [
        'user_id', 'menu_id', 'judul', 'isi', 'dir', 'created_at', 'updated_at'
    ];

    public function user(){
        $this->belongsTo('App\User', 'user_id')->first();
    }

    public function menu(){
        $this->belongsTo('App\Menu','menu_id')->first();
    }
}
