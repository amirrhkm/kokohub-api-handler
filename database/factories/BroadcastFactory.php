<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Koko;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Broadcast>
 */
class BroadcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $broadcastTypes = [
            'BN' => "News",
            'BM' => "Meetings",
            'BE' => "Events"
        ];

        $broadcastType = $this->faker->randomElement($broadcastTypes);

        static $counter = 1;
        $id = $broadcastType . str_pad($counter++, 2, '0', STR_PAD_LEFT);

        return [
            'broadcast_id' => $id,
            'user_id' => User::factory(),
            'koko_id' => Koko::factory(),
            'title' => $this->faker->sentence(5),
            'type' => $broadcastType,
            'content' => $this->faker->paragraph(5)
        ];
    }
}
