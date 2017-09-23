<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    const JABATAN = [
        'Ketua Jurusan',
        'Sekretaris Jurusan',
        'Pembina Kemahasiswaan',
        'Kaprodi D3 Manajemen Informatika',
        'Kaprodi S1 Pendidikan Teknologi Informasi',
        'Kaprodi S1 Sistem Informasi',
        'Kaprodi S1 Teknik Informatika',
        'Unit Penunjang',
        'Ketua Lab',
        'Ketua Lab Rekayasa Perangkat Lunak',
        'Ketua Lab Multimedia Kreatif',
        'Ketua Lab Sistem Informasi',
        'Ketua Lab Jaringan',
        'Staf Pelaksana'
    ];

    protected $table = 'pegawai';

    protected $timestamps = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nama', 'prodi_id', 'jabatan', 'jenis_kelamain', 'dir'
    ];

    public function prodi()
    {
        $this->belongsTo('App\Prodi', 'prodi_id')->first();
    }
}
