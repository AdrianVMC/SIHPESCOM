<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    public function run()
    {
        DB::table('alumno')->insert([
            // Datos de alumnos
            ['nombre' => 'Carlos Adrián', 'primer_apellido' => 'Vázquez', 'segundo_apellido' => 'Montero', 'contrasena' =>bcrypt('password123'), 'correo' => 'cadrian@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'David Alexis', 'primer_apellido' => 'Hernández', 'segundo_apellido' => 'Gonzalez', 'contrasena' =>bcrypt('password123'), 'correo' => 'dalexis@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'José Carlos', 'primer_apellido' => 'Hernández', 'segundo_apellido' => 'Pérez', 'contrasena' =>bcrypt('password123'), 'correo' => 'jcarlos@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Angel Gabriel', 'primer_apellido' => 'Franco', 'segundo_apellido' => 'Delgado', 'contrasena' =>bcrypt('password123'), 'correo' => 'angel@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Eduardo', 'primer_apellido' => 'Garcia', 'segundo_apellido' => 'Rodriguez', 'contrasena' =>bcrypt('password123'), 'correo' => 'eduardo@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Francisco Alejandro', 'primer_apellido' => 'Guevara', 'segundo_apellido' => 'Barrera', 'contrasena' =>bcrypt('password123'), 'correo' => 'francisco@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Carlos Eduardo', 'primer_apellido' => 'Hernandez', 'segundo_apellido' => 'Martinez', 'contrasena' =>bcrypt('password123'), 'correo' => 'carlos@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Rocio', 'primer_apellido' => 'Hernandez', 'segundo_apellido' => 'Martinez', 'contrasena' => bcrypt('password123'), 'correo' => 'rocio@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Mitzi Aquetzali', 'primer_apellido' => 'Herrera', 'segundo_apellido' => 'Vazquez', 'contrasena' => bcrypt('password123'), 'correo' => 'mitzi@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Nuria Adilene', 'primer_apellido' => 'Jonguitud', 'segundo_apellido' => 'Gonzalez', 'contrasena' => bcrypt('password123'), 'correo' => 'nuria@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Gisela', 'primer_apellido' => 'Muñoz', 'segundo_apellido' => 'Garcia', 'contrasena' =>bcrypt('password123'), 'correo' => 'gisela@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Gerardo', 'primer_apellido' => 'Oropeza', 'segundo_apellido' => 'Magallanes', 'contrasena' =>bcrypt('password123'), 'correo' => 'gerardo@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Jovita', 'primer_apellido' => 'Perez', 'segundo_apellido' => 'Muñoz', 'contrasena' =>bcrypt('password123'), 'correo' => 'jovita@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Celia', 'primer_apellido' => 'Pulido', 'segundo_apellido' => 'Romero', 'contrasena' =>bcrypt('password123'), 'correo' => 'celia@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Ilce Lorena', 'primer_apellido' => 'Ramirez', 'segundo_apellido' => 'Bojorgez', 'contrasena' =>bcrypt('password123'), 'correo' => 'ilce@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Maria de los Angeles', 'primer_apellido' => 'Reyes', 'segundo_apellido' => 'Fernandez', 'contrasena' =>bcrypt('password123'), 'correo' => 'maria@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Pedro Ivan', 'primer_apellido' => 'Romero', 'segundo_apellido' => 'Hernandez', 'contrasena' =>bcrypt('password1)23'), 'correo' => 'pedro@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Carlos Sebastian', 'primer_apellido' => 'Trejo', 'segundo_apellido' => 'Pacheco', 'contrasena' =>bcrypt('password123'), 'correo' => 'ctrejo@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Leonel Ranferi', 'primer_apellido' => 'Vasquez', 'segundo_apellido' => 'Ramos', 'contrasena' =>bcrypt('password123'), 'correo' => 'lvasquez@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Danira', 'primer_apellido' => 'Vela', 'segundo_apellido' => 'Alonso', 'contrasena' =>bcrypt('password123'), 'correo' => 'dvela@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Italivy Marsel', 'primer_apellido' => 'Velazquez', 'segundo_apellido' => 'Segura', 'contrasena' =>bcrypt('password123'), 'correo' => 'ielazquez@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Dante Gerardo', 'primer_apellido' => 'Zambrano', 'segundo_apellido' => 'Rosendo', 'contrasena' =>bcrypt('password123'), 'correo' => 'dambrano@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Miguel Angel', 'primer_apellido' => 'Zapata', 'segundo_apellido' => 'Rosales', 'contrasena' =>bcrypt('password123'), 'correo' => 'mzapata@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Mitzy Alondra', 'primer_apellido' => 'Alvarez', 'segundo_apellido' => 'Alameda', 'contrasena' =>bcrypt('password123'), 'correo' => 'mlvarez@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Alisson', 'primer_apellido' => 'Arredondo', 'segundo_apellido' => 'Barajas', 'contrasena' =>bcrypt('password123'), 'correo' => 'aarredondo@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Johana Sherlink', 'primer_apellido' => 'Arzate', 'segundo_apellido' => 'Perez', 'contrasena' =>bcrypt('password123'), 'correo' => 'jarzate@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Roberto', 'primer_apellido' => 'Bartolo', 'segundo_apellido' => 'Hernandez', 'contrasena' =>bcrypt('password123'), 'correo' => 'rbartolo@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Jorge Gabriel', 'primer_apellido' => 'Betancourt', 'segundo_apellido' => 'Campero', 'contrasena' =>bcrypt('password123'), 'correo' => 'jbetancourt@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Eduardo', 'primer_apellido' => 'Brown', 'segundo_apellido' => 'Medina', 'contrasena' =>bcrypt('password123'), 'correo' => 'ebrown@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Gustavo Ulises', 'primer_apellido' => 'Cruz', 'segundo_apellido' => 'Luciano', 'contrasena' =>bcrypt('password123'), 'correo' => 'gcruz@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Rene Ivan', 'primer_apellido' => 'Flores', 'segundo_apellido' => 'Almogabar', 'contrasena' =>bcrypt('password123'), 'correo' => 'rflores@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Alexis', 'primer_apellido' => 'Fuentes', 'segundo_apellido' => 'Franco', 'contrasena' =>bcrypt('password123'), 'correo' => 'afuentes@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Yureymi', 'primer_apellido' => 'Galindez', 'segundo_apellido' => 'Roman', 'contrasena' =>bcrypt('password123'), 'correo' => 'ygalindez@alumno.ipn.mx', 'fecha_registro' => now()],
            ['nombre' => 'Edgar Daniel', 'primer_apellido' => 'Garcia', 'segundo_apellido' => 'Gonzalez', 'contrasena' =>bcrypt('password123'), 'correo' => 'egarcia@alumno.ipn.mx', 'fecha_registro' => now()],

        ]);
    }
}
