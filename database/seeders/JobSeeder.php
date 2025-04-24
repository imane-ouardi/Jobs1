
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        Job::create([
            'title' => 'Frontend Developer',
            'description' => 'We are looking for a frontend developer skilled in Vue.js and Tailwind CSS.',
            'type' => 'Full-time',
            'location' => 'Remote',
            'salary' => '1200-1500 USD',
            'category_id' => 1,
            'company_id' => 1,
            'deadline' => now()->addDays(30)
        ]);
    }
}
