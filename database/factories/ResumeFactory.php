<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResumeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'file' => 'resumes/' . $this->faker->word . '.pdf',
        ];
    }
}
