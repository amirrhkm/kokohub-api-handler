<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Koko;
use App\Models\Broadcast;
use App\Models\Attendance;
use App\Models\Achievement;
use App\Models\Enroll;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
        Koko::factory()->count(25)->create();
        Post::factory()->count(20)->create();
        Broadcast::factory()->count(5)->create();
        Attendance::factory()->count(50)->create();
        Achievement::factory()->count(15)->create();
        Enroll::factory()->count(10)->create();
    }
}
