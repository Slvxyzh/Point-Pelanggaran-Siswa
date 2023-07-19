<?php

namespace Database\Factories;
use Carbon\Carbon;
use Faker\Factory as faker;
use Illuminate\Support\Arr;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siswa>
 */
class siswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker =faker::create(); 
        return [
            'nama'=> $faker->name(),
            'nisn'=> $faker->randomNumber(5, true),
            'jeniskelamin'=> $faker->randomElement(['pria','wanita']),
            'alamat'=> $faker->address(),
            'nohp'=> $faker->randomNumber(),
            'point'=> Arr::random(['100']),
            'email'=> $faker->email(),
            'kelas_id'=> $faker->numberBetween(1,2,3),
            'jurusan_id'=> $faker->numberBetween(1,2,3,4),
        ];
    }
}
