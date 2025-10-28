<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Event;
use App\Models\Booking;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(3)->create();

        $events = Event::factory()->count(3)->create([
            'capacity' => 5,
        ]);

        foreach ($events as $event) {
            Booking::factory()->create([
                'user_id' => 1,
                'event_id' => $event->id,
            ]);
            Booking::factory()->create([
                'user_id' => 1,
                'event_id' => $event->id,
            ]);
        }
    }
}

