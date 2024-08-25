<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Koko>
 */
class KokosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = [
            "Pandu Puteri",
            "Pergerakan Puteri Islam",
            "Pengakap",
            "Kadet Bomba",
            "Persatuan Bulan Sabit Merah",
            "Kadet Polis",
            "Kadet Remaja Sekolah",
            "Persatuan Bahasa Melayu",
            "Persatuan Bahasa Inggeris",
            "Persatuan Bahasa Arab",
            "Persatuan Bahasa Jerman",
            "Persatuan Bahasa Jepun",
            "Persatuan Sains",
            "Persatuan Matematik",
            "Persatuan Sejarah",
            "Persatuan Geografi",
            "Kelab Bimbingan dan Kaunseling",
            "Kelab Rukun Negara",
            "Kelab Usahawan Muda",
            "Kelab Seni Warisan dan Budaya",
            "Kelab Seni Kreatif",
            "Kelab Pengguna",
            "Kelab Drama",
            "Kelab Pencinta Alam",
            "Kelab Rekacipta dan Inovasi",
            "Kelab Fotografi",
            "Kelab Astronomi",
            "Kelab Seni dan Musik",
            "Bola Sepak",
            "Bola Jaring",
            "Badminton",
            "Boling",
            "Kriket",
            "Ragbi",
            "Sepak Takraw",
            "Futsal",
            "Memanah",
            "Catur",
            "Bola Sepak",
            "Ping Pong",
            "Bola Keranjang",
            "Hoki",
            "Petanque",
            "Olahraga"];

        return [
            'name' => $this->faker->randomElement($name),
            'student_capacity' => fake()->numberBetween(10, 50),
            'teacher_capacity' => fake()->numberBetween(2, 10),
        ];
    }
}
