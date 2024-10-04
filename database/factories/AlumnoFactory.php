<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'apellidos' => fake()->lastName(),
            'matricula' => fake()->numberBetween(100000, 999999),
            'telefono' => fake()->phoneNumber(),
            'grado' => fake()->numberBetween(1, 6),
            'grupo' => fake()->randomElement(['A', 'B', 'C', 'D', 'E']),
        ];
    }
}
