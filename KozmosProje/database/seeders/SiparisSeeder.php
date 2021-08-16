<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiparisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Siparis::factory(100)->create();
    }
}
