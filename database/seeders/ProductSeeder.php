<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Notebook', 'price' => 3500, 'category_id' => 1],
            ['name' => 'Sofá', 'price' => 1200, 'category_id' => 2],
            ['name' => 'Camisa', 'price' => 80, 'category_id' => 3],
            ['name' => 'Garrafa PET', 'price' => 5, 'category_id' => 4],
            ['name' => 'Caixa de Papelão', 'price' => 10, 'category_id' => 5],
        ];
    }
}
