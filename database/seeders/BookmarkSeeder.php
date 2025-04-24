
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bookmark;

class BookmarkSeeder extends Seeder
{
    public function run(): void
    {
        Bookmark::create([
            'user_id' => 3,
            'bookmarkable_id' => 1,
            'bookmarkable_type' => 'App\\Models\\Job'
        ]);
    }
}
