<?php

namespace Database\Factories;

use App\Models\Broadcast;
use App\Models\User;
use App\Models\Koko;
use Illuminate\Database\Eloquent\Factories\Factory;

class BroadcastFactory extends Factory
{
    protected $model = Broadcast::class;

    public function definition(): array
    {
        $broadcastTypes = [
            'BN' => "News",
            'BM' => "Meetings",
            'BE' => "Events"
        ];

        $typeKey = array_rand($broadcastTypes);
        $broadcastType = $broadcastTypes[$typeKey];

        static $counter = 1;
        $id = $typeKey . str_pad($counter++, 2, '0', STR_PAD_LEFT);

        return [
            'broadcast_id' => $id,
            'user_id' => User::inRandomOrder()->first()->user_id,
            'koko_id' => Koko::inRandomOrder()->first()->koko_id,
            'title' => $this->faker->sentence(5),
            'type' => $broadcastType,
            'content' => $this->faker->paragraph(5)
        ];
    }
}
