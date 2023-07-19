<?php

namespace Database\Seeders;

use App\Models\guru;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class guruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        guru::truncate();
        
        Schema::enableForeignKeyConstraints();
        guru::factory()->count(10)->create();
    }
}
