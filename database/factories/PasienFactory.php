<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'tgl_lahir' => $this->faker->date('Y-m-d'),
            'jenis_kelamin' => $this->faker->numberBetween(1,2),
            'alamat' => $this->faker->address()

        ];
    }
}
