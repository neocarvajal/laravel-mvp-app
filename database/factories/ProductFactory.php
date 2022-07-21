<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Provider;

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
            'code' => fake()->unique()->randomNumber(8, true),
            'name' => fake()->name(),
            'image' => $this->faker->image(public_path('/image'),640,480, null, false),
            'sell_price' => fake()->randomNumber(3, true),
            'category_id' => Category::all()->random()->id,
            'provider_id' => Provider::all()->random()->id,
        ];
    }
}
