<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->randomNumber(5),
            'razon_social' => $this->faker->company,
            'domicilio' => $this->faker->address,
            'codigo_postal' => $this->faker->postcode,
            'localidad' => $this->faker->city,
            'zona' => $this->faker->word,
            'telefono' => $this->faker->phoneNumber,
            'fax' => $this->faker->phoneNumber,
            'provincia' => $this->faker->state,
            'cuit' => $this->faker->unique()->numerify('###########'),
            'mail' => $this->faker->unique()->safeEmail,
            'contacto' => $this->faker->name,
            'calificacion' => $this->faker->randomElement(['Alta', 'Media', 'Baja']),
        ];
    }
}
