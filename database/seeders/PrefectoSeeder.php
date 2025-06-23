<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefectoSeeder extends Seeder
{
    public function run()
    {
        DB::table('prefecto')->insert([
            ['nombre' => 'Frida', 'primer_apellido' => 'Capetillo', 'segundo_apellido' => 'Salas', 'correo' => 'frida.capetillo@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Gonzalo Quetzalcoatl', 'primer_apellido' => 'Cruz', 'segundo_apellido' => 'Torrijos', 'correo' => 'gonzalo@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Irma Lizbeth', 'primer_apellido' => 'Diaz', 'segundo_apellido' => 'Espinosa', 'correo' => 'idiaz@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Guadalupe', 'primer_apellido' => 'Diaz', 'segundo_apellido' => 'Roque', 'correo' => 'gdiaz@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Frida Sophia', 'primer_apellido' => 'Garcia', 'segundo_apellido' => 'Castro', 'correo' => 'fgarcia@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Francisco Javier', 'primer_apellido' => 'Guzman', 'segundo_apellido' => 'Braulio', 'correo' => 'fguzman@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Brenda Paola', 'primer_apellido' => 'Hernandez', 'segundo_apellido' => 'Badillo', 'correo' => 'bhernandez@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Yaotl Felipe', 'primer_apellido' => 'Lopez', 'segundo_apellido' => 'Vizuet', 'correo' => 'ylopez@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Angelica', 'primer_apellido' => 'Loranca', 'segundo_apellido' => 'Vazquez', 'correo' => 'aloranca@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Azael', 'primer_apellido' => 'Martinez', 'segundo_apellido' => 'Saavedra', 'correo' => 'amartinez@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Maria Fernanda', 'primer_apellido' => 'Mejia', 'segundo_apellido' => 'Vargas', 'correo' => 'mmejia@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Fidel Zeus', 'primer_apellido' => 'Moreno', 'segundo_apellido' => 'Perez', 'correo' => 'fmoreno@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Jeyna Evelyn', 'primer_apellido' => 'Muñoz', 'segundo_apellido' => 'Montoya', 'correo' => 'jmunoz@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Emiliano Pedro', 'primer_apellido' => 'Noguez', 'segundo_apellido' => 'Torres', 'correo' => 'enoguez@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Arian Pamela', 'primer_apellido' => 'Perez', 'segundo_apellido' => 'Olivares', 'correo' => 'aperez@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Andrea Lizeth', 'primer_apellido' => 'Ramirez', 'segundo_apellido' => 'Juarez', 'correo' => 'aramirez@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Itzel Virginia', 'primer_apellido' => 'Rivas', 'segundo_apellido' => 'Sosa', 'correo' => 'irivas@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Roxana', 'primer_apellido' => 'Riveros', 'segundo_apellido' => 'Juarez', 'correo' => 'rriveros@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Karol Michelle', 'primer_apellido' => 'Rosas', 'segundo_apellido' => 'Gonzalez', 'correo' => 'krosas@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
            ['nombre' => 'Mauricio David', 'primer_apellido' => 'Rosiles', 'segundo_apellido' => 'Redonda', 'correo' => 'mrosiles@ipn.mx', 'contrasena' => bcrypt('pas12'), 'fecha_registro' => now()],
        ]);
    }
}
