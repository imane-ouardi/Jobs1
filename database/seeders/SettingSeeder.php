
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::create([
            'key' => 'site_name',
            'value' => 'JobPortal'
        ]);

        Setting::create([
            'key' => 'contact_email',
            'value' => 'info@jobportal.com'
        ]);
    }
}
