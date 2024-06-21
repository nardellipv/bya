<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'stock' => $this->faker->numberBetween(0, 100),
            'discounted_price' => $this->faker->optional(0.3)->randomFloat(2, 5, 50), // Opcionalmente puede tener precio rebajado
            'is_on_sale' => $this->faker->boolean(30), // 30% de probabilidad de estar en oferta
            'image_url' => $this->faker->imageUrl(640, 480, 'products'), // Genera una URL de imagen de prueba
        ];
    }
}
