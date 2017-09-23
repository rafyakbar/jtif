<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'nama' => 'Berita',
            'banyak_konten' => true
        ]);

        Menu::create([
            'nama' => 'Lowongan kerja',
            'banyak_konten' => true
        ]);
    }
}
