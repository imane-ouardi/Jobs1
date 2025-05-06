<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        Application::create([
            'user_id' => 3,
            'job_id' => 1,
            'cover_letter' => 'I am very excited to apply for this position. Please find my CV attached.',
            'cv' => 'resumes/employee_cv.pdf',
            'status' => 'pending'
        ]);
    }
}
