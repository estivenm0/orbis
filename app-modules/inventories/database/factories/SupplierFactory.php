<?php

namespace Estivenm0\Inventories\Database\Factories;

use Estivenm0\Inventories\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->company(),
            'contact_info' => '{}',
        ];
    }
}
