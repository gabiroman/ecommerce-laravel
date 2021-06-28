<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'category' => $this->faker->randomElement(['lorem 1', 'lorem 2', 'lorem 3']),
            'stock' => $this->faker->numberBetween($min = 5, $max = 100)
        ];
    }
}
