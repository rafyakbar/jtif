<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    const JABATAN = [
        'Ketua Jurusan',
        'Sekretaris Jurusan',
        'Pembina Kemahasiswaan'
    ];

    protected $table = 'pegawai';

    protected $timestamps = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nama', 'prodi_id', 'jabatan', 'jenis_kelamain', 'dir'
    ];

    public function prodi()
    {
        $this->belongsTo('App\Prodi', 'prodi_id');
    }
}