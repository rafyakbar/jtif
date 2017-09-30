<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';

    protected $fillable = [
        'nama', 'keterangan', 'dir'
    ];

    public $timestamps = false;

    public function pegawai()
    {
        $this->hasMany('App\Pegawai', 'prodi_id')->get();
    }
}
