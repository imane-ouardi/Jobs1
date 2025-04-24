<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'job_id' => 1,
        ];
    }
}
