<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::create([
            'title' => 'About Us',
            'slug' => 'about-us',
            'content' => 'This is a sample About Us page for the job portal.'
        ]);
    }
}
