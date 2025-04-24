
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = ['PHP', 'Laravel', 'Vue.js', 'TailwindCSS', 'SQL'];

        foreach ($skills as $skill) {
            Skill::create(['name' => $skill]);
        }
    }
}
