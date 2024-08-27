<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Koko>
 */
class KokoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /**
         * KB: Badan Beruniform
         * KS: Sukan dan Permainan
         * KK: Kelab dan Persatuan
         * KR: Rumah Sukan
         */
        $names = [
            'KB' => [
                "Pandu Puteri",
                "Pergerakan Puteri Islam",
                "Pengakap",
                "Kadet Bomba",
                "Persatuan Bulan Sabit Merah",
                "Kadet Polis",
                "Kadet Remaja Sekolah","Pandu Puteri",
                "Pergerakan Puteri Islam",
                "Pengakap",
                "Kadet Bomba",
                "Persatuan Bulan Sabit Merah",
                "Kadet Polis",
                "Kadet Remaja Sekolah"
            ],
            'KS' => [
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
                "Ping Pong",
                "Bola Keranjang",
                "Hoki",
                "Petanque",
                "Olahraga"
            ],
            'KK' => [
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
                "Kelab Seni dan Musik"
            ],
            'KR' => [
                "Rumah Merah",
                "Rumah Kuning",
                "Rumah Hijau",
                "Rumah Biru"
            ]
        ];

        $name = collect($names)->flatMap(
            function ($items, $prefix) {
                return collect($items)->map(
                    function($item) use ($prefix) {
                        return ['prefix' => $prefix, 'name' => $item];
                    }
                );
            })->random();

        static $counter = 1;
        $id = $name['prefix'] . str_pad($counter++, 2, '0', STR_PAD_LEFT);

        return [
            'koko_id' => $id,
            'name' => $name['name'],
            'student_capacity' => fake()->numberBetween(10, 50),
            'teacher_capacity' => fake()->numberBetween(2, 10),
        ];
    }
}
