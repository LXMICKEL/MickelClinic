<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poli; // Pastikan ini diimpor

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Poli::factory()->count(5)->create();
    }
}