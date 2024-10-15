<?php

namespace Database\Factories;

use App\Models\Product_type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product_type>
 */
class Product_typeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_id' => Product_type::all()->random()->id,
            'name' => fake()->name(),
            'cost' => rand(100,1000)
        ];
    }
}
