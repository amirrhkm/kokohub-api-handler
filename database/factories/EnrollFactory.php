<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Koko;
use App\Models\Enroll;

class EnrollFactory extends Factory
{
    public function definition(): array
    {
        $roles = ['Pengerusi', 'Naib Pengerusi', 'Setiausaha', 'Naib Setiausaha', 'Bendahari', 'AJK', 'Ahli'];

        do {
            $user_id = User::inRandomOrder()->first()->user_id;
            $koko_id = Koko::inRandomOrder()->first()->koko_id;
        } while (Enroll::where('user_id', $user_id)->where('koko_id', $koko_id)->exists());

        return [
            'user_id' => $user_id,
            'koko_id' => $koko_id,
            'roles' => $this->faker->randomElement($roles),
            'admin' => $this->faker->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
