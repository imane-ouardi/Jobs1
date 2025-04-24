
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resume;

class ResumeSeeder extends Seeder
{
    public function run(): void
    {
        Resume::create([
            'user_id' => 3,
            'file' => 'resumes/employee_cv.pdf'
        ]);
    }
}
