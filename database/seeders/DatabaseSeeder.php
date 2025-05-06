<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            JobTypeSeeder::class,
        ]);

        Company::factory()->count(10)->create();

        Job::factory()->count(50)->create();
    }
}
