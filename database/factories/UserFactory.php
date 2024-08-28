<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Achievement;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        $prefixes = ['S', 'T'];
        $prefix = $this->faker->randomElement($prefixes);

        // Generate a unique ID with prefix
        static $counter = 1;
        $userId = $prefix . str_pad($counter++, 4, '0', STR_PAD_LEFT);

        return [
            'user_id' => $userId,
            'achievement_id' => null, // Set this to null initially
            'username' => $this->faker->unique()->userName,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }
}
