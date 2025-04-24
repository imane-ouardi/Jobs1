
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Location::create(['city' => 'Casablanca', 'country' => 'Morocco']);
        \App\Models\Location::create(['city' => 'Paris', 'country' => 'France']);
        \App\Models\Location::create(['city' => 'New York', 'country' => 'USA']);
    }
}
