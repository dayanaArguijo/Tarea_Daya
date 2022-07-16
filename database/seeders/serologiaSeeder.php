<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\serologia;

class serologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        serologia::Factory(1000)->create();
    }
}
