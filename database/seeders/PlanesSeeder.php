<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PlanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planes')->insert([
            [
                'nombre_plan' => 'Basico',
                'clientes_inscritos' => 0,
                'descripcion' => 'Acceso a un solo gimnasio',
                'costo' => 299,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_plan' => 'Premium',
                'clientes_inscritos' => 0,
                'descripcion' => 'Acceso a todos los gimnasios + clases',
                'costo' => 499,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
