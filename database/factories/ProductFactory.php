<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),        // nome do produto
            'description' => $this->faker->sentence(),     // descrição do produto
            'price' => $this->faker->randomFloat(2, 1, 500), // preço entre 1 e 500
            'category_id' => Category::inRandomOrder()->first()->id, // categoria aleatória existente
        ];
    }
}
