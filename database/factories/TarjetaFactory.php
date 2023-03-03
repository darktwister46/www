<?php

namespace Database\Factories;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarjeta>
 */
class TarjetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'num_tarjeta'=> fake()-> randomNumber(8) . fake()->randomNumber(8),
            'mes_caducidad' => fake()->numberBetween(1,12),
            'anyo_caducidad' =>fake()->numberBetween(2022,2030),
            'cvv'=> fake()->randomNumber(3),
            'id_cliente'=> fake()->randomElement(User::all())['id']  
        ];
    }
}
