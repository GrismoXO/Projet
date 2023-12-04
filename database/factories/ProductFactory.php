<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
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
    protected $model = Product::class;
    
    public function definition(): array
    {
        
        $userId = User::inRandomOrder()->first()->id;

        return [
            'title' => fake()->title(),
            'description' => fake()->sentence(),
            'image' => 'http://via.placeholder.com/1000',
            'alt' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 10, 100),
            'stock' => fake()->numberBetween(0, 100),
            'user_id' => $userId,
        ];
    }
}
