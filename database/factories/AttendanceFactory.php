<?php

namespace Database\Factories;

use App\Models\Koko;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'user_id' => User::factory(),
            'koko_id' => Koko::factory(),
            'status' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
