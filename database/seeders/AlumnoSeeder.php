<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    public function run()
    {
        DB::table('alumno')->insert([
            ['nombre' => 'Carlos Adrián', 'primer_apellido' => 'Vázquez', 'segundo_apellido' => 'Montero', 'correo' => 'cadrian@alumno.ipn.mx', 'contrasena' => bcrypt('password123'), 'fecha_registro' => now()],
            ['nombre' => 'David Alexis', 'primer_apellido' => 'Hernández', 'segundo_apellido' => 'Gonzalez', 'correo' => 'dalexis@alumno.ipn.mx', 'contrasena' => bcrypt('password123'), 'fecha_registro' => now()],
            ['nombre' => 'José Carlos', 'primer_apellido' => 'Hernández', 'segundo_apellido' => 'Pérez', 'correo' => 'jcarlos@alumno.ipn.mx', 'contrasena' => bcrypt('password123'), 'fecha_registro' => now()],
            ['nombre' => 'Angel Gabriel', 'primer_apellido' => 'Franco', 'segundo_apellido' => 'Delgado', 'correo' => 'angel@alumno.ipn.mx', 'contrasena' => bcrypt('password123'), 'fecha_registro' => now()],
            ['nombre' => 'Eduardo', 'primer_apellido' => 'Garcia', 'segundo_apellido' => 'Rodriguez', 'correo' => 'eduardo@alumno.ipn.mx', 'contrasena' => bcrypt('password123'), 'fecha_registro' => now()],
            ['nombre' => 'Francisco Alejandro', 'primer_apellido' => 'Guevara', 'segundo_apellido' => 'Barrera', 'correo' => 'francisco@alumno.ipn.mx', 'contrasena' => bcrypt('password123'), 'fecha_registro' => now()],
            ['nombre' => 'Carlos Eduardo', 'primer_apellido' => 'Hernandez', 'segundo_apellido' => 'Martinez', 'correo' => 'carlos@alumno.ipn.mx', 'contrasena' => bcrypt('password123'), 'fecha_registro' => now()],
            ['nombre' => 'Rocio', 'primer_apellido' => 'Hernandez', 'segundo_apellido' => 'Martinez', 'correo' => 'rocio@alumno.ipn.mx', 'contrasena' => bcrypt('password123'), 'fecha_registro' => now()],
            ['nombre' => 'Mitzi Aquetzali', 'primer_apellido' => 'Herrera', 'segundo_apellido' => 'Vazquez', 'correo' => 'mitzi@alumno.ipn.mx', 'contrasena' => bcrypt('password123'), 'fecha_registro' => now()],
            ['nombre' => 'Nuria Adilene', 'primer_apellido' => 'Jonguitud', 'segundo_apellido' => 'Gonzalez', 'correo' => 'nuria@alumno.ipn.mx', 'contrasena' => bcrypt('password123'), 'fecha_registro' => now()],
        ]);
    }
}
