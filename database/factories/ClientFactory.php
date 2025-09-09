<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),          // nome completo
            'email' => $this->faker->unique()->safeEmail(), // email único
            'phone' => $this->faker->phoneNumber(),   // telefone fictício
            'address' => $this->faker->address(),     // endereço fictício
        ];
    }
}
