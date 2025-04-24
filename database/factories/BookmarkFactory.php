<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookmarkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'bookmarkable_id' => 1,
            'bookmarkable_type' => 'App\\Models\\Job',
        ];
    }
}
