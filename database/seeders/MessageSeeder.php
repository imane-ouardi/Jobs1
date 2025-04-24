
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Message::create([
            'sender_id' => 3,
            'receiver_id' => 2,
            'message' => 'Hello, I am interested in the frontend developer position.'
        ]);
    }
}
