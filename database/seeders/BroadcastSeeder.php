<?php

namespace Database\Seeders;

use App\Models\Broadcast;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BroadcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed 50 broadcasts
        Broadcast::factory()->count(50)->create();
    }
}
