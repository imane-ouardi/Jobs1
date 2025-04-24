
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        Blog::create([
            'title' => 'Why Remote Work is the Future',
            'slug' => 'remote-work-future',
            'excerpt' => 'Discover why remote work is here to stay.',
            'content' => 'Remote work has changed how we think about the office. With the rise of tech...',
            'published_at' => now()
        ]);
    }
}
