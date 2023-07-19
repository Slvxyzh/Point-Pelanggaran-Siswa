<?php

namespace Database\Seeders;

use App\Models\siswa;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        siswa::truncate();
         
        Schema::enableForeignKeyConstraints();
        siswa::factory()->count(10)->create();
    }
}
