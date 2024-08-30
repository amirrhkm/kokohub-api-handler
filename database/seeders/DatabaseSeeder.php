<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Koko;
use App\Models\Achievement;
use App\Models\Attendance;
use App\Models\Broadcast;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Koko instances first
        $kokos = Koko::factory(10)->create();

        // Create Users and their related models
        User::factory(10)
            ->create()
            ->each(function ($user) use ($kokos) {
                // Create Achievements for each user
                Achievement::factory(2)->create([
                    'user_id' => $user->user_id,
                    'koko_id' => $kokos->random()->koko_id,
                ]);

                // Create Attendances for each user
                Attendance::factory(10)->create([
                    'user_id' => $user->user_id,
                    'koko_id' => $kokos->random()->koko_id,
                ]);

                // Create Broadcasts for each user
                Broadcast::factory(5)->create([
                    'user_id' => $user->user_id,
                    'koko_id' => $kokos->random()->koko_id,
                ]);

                // Create Posts for each user
                Post::factory(3)->create([
                    'user_id' => $user->user_id,
                    'koko_id' => $kokos->random()->koko_id,
                ]);

                // Attach user to multiple Koko models
                $user->kokos()->attach(
                    $kokos->random(2)->pluck('koko_id'),
                    [
                        'roles' => 'member',
                        'admin' => false,
                    ]
                );
            });
    }
}
