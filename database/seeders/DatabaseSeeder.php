<?php

namespace Database\Seeders;
use App\Models\Poli;
use Faker\Factory as Faker;

//use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //\App\Models\Pasien::factory(50)->create();
        //App\Models\Daftar::factory(100)->create();
        //\App\Models\Poli::factory(5)->create();
        $this->call([
            PoliSeeder::class,
        ]);
    }
}