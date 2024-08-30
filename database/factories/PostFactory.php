<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Koko;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->user_id, // Get a random User ID
            'koko_id' => Koko::inRandomOrder()->first()->koko_id, // Get a random Koko ID
            'tag' => $this->faker->word, // Generate a random tag
            'title' => $this->faker->sentence, // Generate a random title
            'content' => $this->faker->paragraph, // Generate a random content
        ];
    }
}
