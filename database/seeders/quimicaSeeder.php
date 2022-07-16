<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\quimica;

class quimicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        quimica::Factory(1000)->create();
    }
}
