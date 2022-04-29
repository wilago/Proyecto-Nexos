<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovimientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id'=>rand(1,10),
            'ncuenta' =>$this->faker->unique()->randomNumber(8, true),
            'tipo'  =>$this->faker->randomElement([1,2]),
            'saldo'  =>$this->faker->randomNumber(6, false),
        ];
    }
}
