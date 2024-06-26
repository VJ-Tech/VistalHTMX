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
    public function definition()
    {
        return [
            'name' => fake()->words(3, true),
            'description' => fake()->sentence,
            'imageURL' => fake()->randomElement(['https://greendroprecycling.com/wp-content/uploads/2017/04/GreenDrop_Station_Aluminum_Can_1.jpg', 'https://www.shutterstock.com/image-illustration/bottle-gel-lotion-beauty-product-260nw-1348122737.jpg']),
            'price' => fake()->numberBetween(100, 1000)
        ];
    }
}
