<?php

namespace Estivenm0\Inventories\Database\Factories;

use Estivenm0\Inventories\Models\Image;
use Estivenm0\Inventories\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $path = fake()->image('public/storage/products', 1000, 1000);

        return [
            'name' => basename($path),
            'product_id' => Product::factory(),
        ];
    }
}
