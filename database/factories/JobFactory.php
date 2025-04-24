<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph(3),
            'type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Remote']),
            'location' => $this->faker->city,
            'salary' => $this->faker->numberBetween(1000, 5000) . ' USD',
            'category_id' => 1,
            'company_id' => 1,
            'deadline' => now()->addDays(rand(10, 60)),
        ];
    }
}
