<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\hormonales;

class hormonalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        hormonales::Factory(1000)->create();
    }
}
