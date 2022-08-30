<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Helpers\NipGenerator;

class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

         return [

            'nip' => (new NipGenerator())->generate([
                'dob' => $this->faker->date('Y-m-d')
             ]),
            'nama' => $this->faker->name(),
        ];
    }
}
