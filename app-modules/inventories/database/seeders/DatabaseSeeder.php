<?php

namespace Estivenm0\Inventories\Database\Seeders;

use Estivenm0\Inventories\Models\Category;
use Estivenm0\Inventories\Models\Image;
use Estivenm0\Inventories\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(4)
            ->has(
                Product::factory()
                    ->has(Image::factory()->count(3))
                    ->count(6)
            )
            ->create();
    }
}
