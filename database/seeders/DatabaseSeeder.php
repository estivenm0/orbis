<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Estivenm0\Inventories\Database\Seeders\DatabaseSeeder as InventoriesSeeder;
use Estivenm0\Sales\Database\Seeders\DatabaseSeeder as SalesSeeder;
use Estivenm0\Sales\Models\SaleProduct;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            InventoriesSeeder::class,
            SalesSeeder::class
        ]);

    }
}
