<?php

namespace Database\Seeders;

use App\Models\Koko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed 50 kokos
        Koko::factory()->count(50)->create();    
    }
}
