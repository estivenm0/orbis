<?php

namespace Estivenm0\Sales\Database\Factories;

use Estivenm0\Inventories\Models\Product;
use Estivenm0\Sales\Models\Sale;
use Estivenm0\Sales\Models\SaleProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SaleProduct::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'sale_id' => Sale::factory(),
            'product_id' => Product::factory(),
            'quantity' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
