<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Koko>
 */
class KokoFactory extends Factory
{
    private static $kokoMapping = [
        'KB01' => "Pandu Puteri",
        'KB02' => "Pergerakan Puteri Islam",
        'KB03' => "Pengakap",
        'KB04' => "Kadet Bomba",
        'KB05' => "Persatuan Bulan Sabit Merah",
        'KB06' => "Kadet Polis",
        'KB07' => "Kadet Remaja Sekolah",
    
        'KS01' => "Bola Sepak",
        'KS02' => "Bola Jaring",
        'KS03' => "Badminton",
        'KS04' => "Boling",
        'KS05' => "Kriket",
        'KS06' => "Ragbi",
        'KS07' => "Sepak Takraw",
        'KS08' => "Futsal",
        'KS09' => "Memanah",
        'KS10' => "Catur",
        'KS11' => "Ping Pong",
        'KS12' => "Bola Keranjang",
        'KS13' => "Hoki",
        'KS14' => "Petanque",
        'KS15' => "Olahraga",
    
        'KK01' => "Persatuan Bahasa Melayu",
        'KK02' => "Persatuan Bahasa Inggeris",
        'KK03' => "Persatuan Bahasa Arab",
        'KK04' => "Persatuan Bahasa Jerman",
        'KK05' => "Persatuan Bahasa Jepun",
        'KK06' => "Persatuan Sains",
        'KK07' => "Persatuan Matematik",
        'KK08' => "Persatuan Sejarah",
        'KK09' => "Persatuan Geografi",
        'KK10' => "Kelab Bimbingan dan Kaunseling",
        'KK11' => "Kelab Rukun Negara",
        'KK12' => "Kelab Usahawan Muda",
        'KK13' => "Kelab Seni Warisan dan Budaya",
        'KK14' => "Kelab Seni Kreatif",
        'KK15' => "Kelab Pengguna",
        'KK16' => "Kelab Drama",
        'KK17' => "Kelab Pencinta Alam",
        'KK18' => "Kelab Rekacipta dan Inovasi",
        'KK19' => "Kelab Fotografi",
        'KK20' => "Kelab Astronomi",
        'KK21' => "Kelab Seni dan Musik",
    
        'KR01' => "Rumah Merah",
        'KR02' => "Rumah Kuning",
        'KR03' => "Rumah Hijau",
        'KR04' => "Rumah Biru"
    ];

    public function definition(): array
    {
        $id = array_key_first(self::$kokoMapping);
        $name = array_shift(self::$kokoMapping);

        return [
            'koko_id' => $id,
            'name' => $name,
            'student_capacity' => $this->faker->numberBetween(10, 50),
            'teacher_capacity' => $this->faker->numberBetween(2, 10),
        ];
    }
}
