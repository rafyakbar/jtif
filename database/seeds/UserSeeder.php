<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rafy Aulia Akbar',
            'email' => 'rafyakbar@mhs.unesa.ac.id',
            'password' => bcrypt('secret')
        ]);

        User::create([
            'name' => 'Fachrizal Al Ashar',
            'email' => 'fachrizalashar@mhs.unesa.ac.id',
            'password' => bcrypt('secret')
        ]);

        User::create([
            'name' => 'Yusuf Christian',
            'email' => 'yusufchristian@mhs.unesa.ac.id',
            'password' => bcrypt('secret')
        ]);

        User::create([
            'name' => 'Natalia Mamahit',
            'email' => 'nataliamamahit@mhs.unesa.ac.id',
            'password' => bcrypt('secret')
        ]);
    }
}
