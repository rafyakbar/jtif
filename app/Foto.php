<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    public $timestamps = false;

    protected $table = 'foto';

    protected $fillable = [
        'galeri_id', 'dir'
    ];

    public function galeri()
    {
        $this->belongsTo('App\Galeri', 'galeri_id')->first();
    }
}
