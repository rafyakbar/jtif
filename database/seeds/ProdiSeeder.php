<?php

use Illuminate\Database\Seeder;
use App\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const JURUSAN = [
        'D3 Manajemen Informatika',
        'S1 Pendidikan Teknologi Informasi',
        'S1 Sistem Informasi',
        'S1 Teknik Informatika'
    ];

    public function run()
    {
        foreach (static::JURUSAN as $value){
            Prodi::create([
                'nama' => $value,
                'keterangan' => 'Berisi visi, misi dan lain-lain'
            ]);
        }
    }
}
