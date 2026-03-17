<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName(),
            'apellidos' => fake()->lastName(),
            'correo_electronico' => fake()->unique()->safeEmail(),
            'estado' => 'activo',
            'id_plan' => rand(1,2),
            'id_gimnasio' => rand(1,2),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
