<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'name' => fake()->name(),
            'price' => fake()->randomNumber(2),
            'description' => fake()->sentence(200),
            // 'image' => public_path("images/product_default.jpg"),
            'image' => fake()->image(storage_path('app/public/images'),361,230, null, false),
        ];
    }
}
