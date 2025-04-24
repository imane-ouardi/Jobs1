<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'job_id' => 1,
            'cover_letter' => $this->faker->paragraph,
            'cv' => 'resumes/sample_cv.pdf',
            'status' => $this->faker->randomElement(['pending', 'accepted', 'rejected']),
        ];
    }
}
