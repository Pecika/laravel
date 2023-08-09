<?php

namespace Database\Factories;

use App\Models\Ljubimac;
use App\Models\Veterinar;
use Illuminate\Database\Eloquent\Factories\Factory;

class PregledFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    //1
    //2
    //3
    //
    //10
    public function definition()
    {
        return [
            'ljubimac' => $this->faker->numberBetween($min = 1, $max = Ljubimac::count()),
            'veterinar' =>$this->faker->numberBetween($min = 1, $max = Veterinar::count()),
            'datum' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'cena' =>$this->faker->numberBetween($min = 1000, $max = 15000),
           
        ];
    }
}
