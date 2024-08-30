<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\User;
use App\Models\Koko;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->user_id,
            'koko_id' => Koko::inRandomOrder()->first()->koko_id,
            'status' => $this->faker->boolean, // 50% chance of true/false
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
