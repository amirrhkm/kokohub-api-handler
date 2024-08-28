<?php

namespace Database\Factories;

use App\Models\Koko;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AchievementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tier = ['School', 'District', 'State', 'National'];
        return [
            'user_id' => User::inRandomOrder()->first()->user_id,
            // 'koko_id' => Koko::factory(),
            // 'user_id' => null,
            'koko_id' => Koko::inRandomOrder()->first()->koko_id,
            'name' => 'Sample Achievement Name',
            'years' => $this->faker->year(),
            'tier' => $this->faker->randomElement($tier),
        ];
    }
}
