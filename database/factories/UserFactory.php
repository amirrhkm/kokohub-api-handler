<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        $prefixes = ['S', 'T'];
        $prefix = $this->faker->randomElement($prefixes);

        static $counter = 1;
        $userId = $prefix . str_pad($counter++, 4, '0', STR_PAD_LEFT);

        return [
            'user_id' => $userId,
            'username' => $this->faker->unique()->userName,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
