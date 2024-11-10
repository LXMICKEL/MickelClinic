<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Poli;

class PoliFactory extends Factory
{
    protected $model = Poli::class;

    public function definition(): array
    {
        return [
            'nama' => $this->faker->randomElement(['Anak', 'Jiwa', 'Kandungan', 'Penyakit Dalam', 'Gizi']),
            'biaya' => $this->faker->numberBetween(30000, 100000),
            'keterangan' => $this->faker->sentence,
        ];
    }
}