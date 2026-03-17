<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal>
 */
class PersonalFactory extends Factory
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
            'dni' => fake()->numerify('########'),
            'telefono' => fake()->numerify('612#######'),
            'direccion' => fake()->address(),
            'salario' => fake()->numberBetween(5000,15000),
            'horario' => 'Matutino',
            'estado' => 'activo',
            'id_gimnasio' => rand(1,2),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
