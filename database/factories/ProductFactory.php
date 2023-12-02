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
            'name_en' => fake()->name(),
            'name_ar' => fake()->name("ar_JO"),
            'name_tr' => fake()->name("tr_JO"),
            'price' => fake()->randomNumber(2),
            'description_en' => fake()->sentence(200),
            'description_ar' => fake()->sentence(200),
            'description_tr' => fake()->sentence(200),
            // 'image' => public_path("img/product_default.jpg"),
            // 'image' => fake()->image(storage_path('app/public/images'),361,230, null, false),
            // 'image' => asset("img/product_default.jpg")
            'image' => "product_default.jpg"
        ];
    }
}
