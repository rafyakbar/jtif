<?php

use Illuminate\Database\Seeder;
use App\Prasarana;

class PrasaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prasarana::create([
            'nama' => 'Lab Multimedia Kreatif',
            'keterangan' => 'Ini keterangan'
        ]);

        Prasarana::create([
            'nama' => 'Lab Rekayasa Perangkat Lunak',
            'keterangan' => 'Ini keterangan'
        ]);

        Prasarana::create([
            'nama' => 'Lab Sistem Informasi',
            'keterangan' => 'Ini keterangan'
        ]);

        Prasarana::create([
            'nama' => 'Lab Jaringan Komputer',
            'keterangan' => 'Ini keterangan'
        ]);
    }
}
