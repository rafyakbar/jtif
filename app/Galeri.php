<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    public $timestamps = false;

    protected $table = 'galeri';

    protected $fillable = [
        'nama'
    ];

    public function foto()
    {
        $this->hasMany('App\Foto', 'galeri_id')->get();
    }
}
