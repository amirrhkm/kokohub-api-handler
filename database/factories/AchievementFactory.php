<?php

namespace Database\Factories;

use App\Models\Achievement;
use App\Models\User;
use App\Models\Koko;
use Illuminate\Database\Eloquent\Factories\Factory;

class AchievementFactory extends Factory
{
    protected $model = Achievement::class;

    public function definition(): array
    {
        $tiers = ['School', 'District', 'State', 'National'];

        return [
            'user_id' => User::inRandomOrder()->first()->user_id,
            'koko_id' => Koko::inRandomOrder()->first()->koko_id,
            'name' => $this->faker->sentence(3), // Random achievement name
            'years' => $this->faker->year(),
            'tier' => $this->faker->randomElement($tiers),
        ];
    }
}
