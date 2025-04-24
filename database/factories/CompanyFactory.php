<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'logo' => 'logos/' . $this->faker->word . '.png',
            'location' => $this->faker->city,
            'website' => $this->faker->url,
            'description' => $this->faker->paragraph,
        ];
    }
}
