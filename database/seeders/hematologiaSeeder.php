<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\hematologia;

class hematologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        hematologia::Factory(1000)->create();
    }
}
