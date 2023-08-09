<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VeterinarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' =>$this->faker->lastName(),
            'iskustvo' => $this->faker->randomElement($array = array ('praktikant','junior','medior','senior')),
           
        ];
    }
}
