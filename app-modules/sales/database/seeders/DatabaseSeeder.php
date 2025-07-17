<?php

namespace Estivenm0\Sales\Database\Seeders;

use Estivenm0\Sales\Models\SaleProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SaleProduct::factory(5)->create();
    }
}
