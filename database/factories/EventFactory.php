<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'capacity' => fake()->numberBetween(5, 20),
            'start_time' => fake()->dateTimeBetween('+1 days', '+1 month'),
        ];
    }
}
