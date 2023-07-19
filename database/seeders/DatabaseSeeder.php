<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\student;
use App\Models\guru;
use App\Models\pelanggaran;
use Illuminate\Database\Seeder;
use Database\Seeders\ClassSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            siswaSeeder::class,
            guruSeeder::class,
            pelanggaranSeeder::class
         ]);
 
    }
}
