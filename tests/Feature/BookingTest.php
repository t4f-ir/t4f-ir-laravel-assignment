<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Event;

class BookingTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_booking()
    {
        $user = User::factory()->create();
        $event = Event::factory()->create(['capacity' => 5]);

        $response = $this->actingAs($user, 'sanctum')->postJson('/api/bookings', [
            'event_id' => $event->id,
        ]);

        $response->assertStatus(200);
    }
}

