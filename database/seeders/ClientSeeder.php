<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            ['name' => 'Douglas Santos', 'email' => 'douglas@example.com'],
            ['name' => 'Maria Oliveira', 'email' => 'maria@example.com'],
            ['name' => 'João Silva', 'email' => 'joao@example.com'],
        ];
    }
}
