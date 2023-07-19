<?php

namespace Database\Factories;
use Carbon\Carbon;
use Faker\Factory as faker;
use Illuminate\Support\Arr;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\guru>
 */
class guruFactory extends Factory
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
            'nipd'=> $faker->randomNumber(5, true),
            'alamat'=> $faker->address(),
            'nohp'=> $faker->randomNumber(),
            'email'=> $faker->email(),
            'kelas_id'=> $faker->numberBetween(1,2,3),
        ];
    }
}
