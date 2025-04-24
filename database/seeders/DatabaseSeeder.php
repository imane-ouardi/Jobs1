
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Call all seeders
        \$this->call([
            UserSeeder::class,
            CategorySeeder::class,
            JobTypeSeeder::class,
        ]);
    }
}
