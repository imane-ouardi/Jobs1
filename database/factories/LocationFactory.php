<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'city' => $this->faker->city,
            'country' => $this->faker->country,
        ];
    }
}
