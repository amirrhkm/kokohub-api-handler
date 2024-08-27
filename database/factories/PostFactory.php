<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Koko;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id, // Get a random User ID
            'koko_id' => Koko::inRandomOrder()->first()->id, // Get a random Koko ID
            'tag' => $this->faker->word, // Generate a random tag
            'title' => $this->faker->sentence, // Generate a random title
            'content' => $this->faker->paragraph, // Generate a random content
        ];
    }
}
