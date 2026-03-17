<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GimnasiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gimnasios')->insert([
            [
                'nombre' => 'SmartFit Centro',
                'direccion' => 'Av. Reforma 100',
                'telefono' => '6121111111',
                'horario_apertura' => '06:00:00',
                'horario_cierre' => '23:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'SmartFit Plaza',
                'direccion' => 'Plaza Comercial Local 5',
                'telefono' => '6122222222',
                'horario_apertura' => '06:00:00',
                'horario_cierre' => '22:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
