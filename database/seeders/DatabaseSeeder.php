<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Personal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GimnasiosSeeder::class,
            PlanesSeeder::class,
        ]);

        Cliente::factory(100)->create();
        Personal::factory(20)->create();
    }
}
