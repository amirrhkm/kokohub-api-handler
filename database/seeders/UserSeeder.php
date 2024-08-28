<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Achievement;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::factory()->count(50)->create();

        $users->each(function ($user) {
            $achievement = Achievement::factory()->create(['user_id' => $user->user_id]);
            $user->update(['achievement_id' => $achievement->id]);
        });
    }
}
