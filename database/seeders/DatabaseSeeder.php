<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(quimicaSeeder::class);
        $this->call(hematologiaSeeder::class);
        $this->call(hormonalesSeeder::class);
        $this->call(serologiaSeeder::class);
    }
}
