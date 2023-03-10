<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horario>
 */
class HorarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fecha'=> fake()-> dateTimeThisMonth('')->format('Y-m-d'),
            'hora' => fake()->time(),
            'estado' =>'disponible'
        ];
    

    }
}
