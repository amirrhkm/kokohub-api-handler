<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Achievement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        // Define prefixes and user types
        $prefixes = [
            'student' => 'S',
            'teacher' => 'T',
        ];

        // Randomly select a user type
        $userType = array_rand($prefixes);
        $prefix = $prefixes[$userType];

        // Generate a unique ID with prefix
        static $counter = 1;
        $userId = $prefix . str_pad($counter++, 4, '0', STR_PAD_LEFT);

        return [
            'user_id' => $userId,
            'achievement_id' => Achievement::factory(),
            'username' => $this->faker->unique()->userName,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }
}
