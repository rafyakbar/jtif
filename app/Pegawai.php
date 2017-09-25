<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    const JABATAN = [
        'Dekan', //0
        'Ketua Jurusan', //1
        'Sekretaris Jurusan',//2
        'Pembina Kemahasiswaan', //3
        'Kaprodi D3 Manajemen Informatika', //4
        'Kaprodi S1 Pendidikan Teknologi Informasi', //5
        'Kaprodi S1 Sistem Informasi',//6
        'Kaprodi S1 Teknik Informatika',//7
        'Unit Penunjang',//8
        'Ketua Lab',//9
        'Ketua Lab Rekayasa Perangkat Lunak',//10
        'Ketua Lab Multimedia Kreatif',//11
        'Ketua Lab Sistem Informasi',//12
        'Ketua Lab Jaringan',//13
        'Staf Pelaksana'//14
    ];

    protected $table = 'pegawai';

    public $timestamps = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nama', 'prodi_id', 'jabatan', 'jenis_kelamain', 'dir'
    ];

    public function prodi()
    {
        $this->belongsTo('App\Prodi', 'prodi_id')->first();
    }
}
