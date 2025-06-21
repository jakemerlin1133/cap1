<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchaseHistory>
 */
class PurchaseHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ProductName' => fake()->word(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'weight' => $this->faker->randomFloat(2, 0.1, 100),
            'unit' => $this->faker->randomElement(['Kg', 'g']),
            'stock' => $this->faker->numberBetween(1, 1000),
            'price' => $this->faker->randomFloat(2, 10, 10000),
        ];
    }
}
