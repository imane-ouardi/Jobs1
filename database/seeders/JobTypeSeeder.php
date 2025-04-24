<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobType;

class JobTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = ['Full-time', 'Part-time', 'Remote', 'Internship', 'Freelance'];

        foreach ($types as $type) {
            JobType::create(['name' => $type]);
        }
    }
}
