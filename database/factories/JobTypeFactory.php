<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobTypeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Full-time', 'Part-time', 'Remote', 'Internship', 'Freelance']),
        ];
    }
}
