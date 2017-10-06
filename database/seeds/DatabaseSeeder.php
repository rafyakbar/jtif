<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Database\Eloquent\Model::unguard();

        $this->call('ProdiSeeder');
        $this->call('UserSeeder');
        $this->call('PegawaiSeeder');
        $this->call('PrasaranaSeeder');
        $this->call('MenuSeeder');
        $this->call('KritikSaranSeeder');
    }
}
