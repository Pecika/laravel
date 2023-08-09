<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LjubimacFactory extends Factory
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
            'ime_vlasnika' =>$this->faker->firstName(),
            'rasa' => $this->faker->randomElement($array = array ('labrador','retriver','bison','maltezer')),
            'godine' =>$this->faker->numberBetween($min = 1, $max = 15),
           
        ];
    }
}
