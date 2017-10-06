<?php

use Illuminate\Database\Seeder;
use App\KritikSaran;

class KritikSaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KritikSaran::class, 50)->create()->each(function ($u) {
            $u->make();
        });
    }
}
