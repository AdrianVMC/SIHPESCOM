<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('alumno')->insert([
            'boleta' => 2024630192,
            'nombre' => 'Daniela',
            'primer_apellido' => 'Martínez',
            'segundo_apellido' => 'López',
            'contrasena' => Hash::make('daniela321'), // Contraseña segura
            'correo' => 'daniela@example.com',
            'fecha_registro' => now(),
        ]);
    }
}
