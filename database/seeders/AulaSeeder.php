<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AulaSeeder extends Seeder
{
    public function run()
    {
        DB::table('aula')->insert([
            ['nombre_aula' => '1001', 'tipo' => 'Aula', 'edificio' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1002', 'tipo' => 'Aula', 'edificio' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1003', 'tipo' => 'Aula', 'edificio' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1004', 'tipo' => 'Aula', 'edificio' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1005', 'tipo' => 'Aula', 'edificio' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1006', 'tipo' => 'Aula', 'edificio' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1007', 'tipo' => 'Aula', 'edificio' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1008', 'tipo' => 'Aula', 'edificio' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1009', 'tipo' => 'Aula', 'edificio' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1010', 'tipo' => 'Aula', 'edificio' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2001', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2002', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2003', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2004', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2005', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2006', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2007', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2008', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2009', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2010', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1101', 'tipo' => 'Laboratorio', 'edificio' => 'C', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1102', 'tipo' => 'Laboratorio', 'edificio' => 'C', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1103', 'tipo' => 'Laboratorio', 'edificio' => 'C', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '1104', 'tipo' => 'Laboratorio', 'edificio' => 'C', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2201', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2202', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_aula' => '2203', 'tipo' => 'Aula', 'edificio' => 'B', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
