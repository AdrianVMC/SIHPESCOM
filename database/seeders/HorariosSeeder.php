<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorariosSeeder extends Seeder
{
    public function run()
    {
        DB::table('horarios')->insert([

            // Docente 1 
            ['id_grupo' => 1, 'id_aula' => 1, 'dia_semana' => 'Lunes', 'hora_inicio' => '13:30:00', 'hora_fin' => '15:00:00'],
            ['id_grupo' => 2, 'id_aula' => 2, 'dia_semana' => 'Miércoles', 'hora_inicio' => '13:30:00', 'hora_fin' => '15:00:00'],
            ['id_grupo' => 3, 'id_aula' => 3, 'dia_semana' => 'Viernes', 'hora_inicio' => '16:30:00', 'hora_fin' => '18:00:00'],
            ['id_grupo' => 4, 'id_aula' => 4, 'dia_semana' => 'Lunes', 'hora_inicio' => '18:30:00', 'hora_fin' => '20:00:00'],

            // Docente 2 
            ['id_grupo' => 5, 'id_aula' => 5, 'dia_semana' => 'Martes', 'hora_inicio' => '08:00:00', 'hora_fin' => '10:00:00'],
            ['id_grupo' => 6, 'id_aula' => 6, 'dia_semana' => 'Jueves', 'hora_inicio' => '08:00:00', 'hora_fin' => '10:00:00'],
            ['id_grupo' => 7, 'id_aula' => 21, 'dia_semana' => 'Miércoles', 'hora_inicio' => '13:30:00', 'hora_fin' => '15:00:00'],
            ['id_grupo' => 8, 'id_aula' => 22, 'dia_semana' => 'Viernes', 'hora_inicio' => '20:00:00', 'hora_fin' => '21:30:00'],

            // Docente 3
            ['id_grupo' => 9, 'id_aula' => 7, 'dia_semana' => 'Lunes', 'hora_inicio' => '16:30:00', 'hora_fin' => '18:00:00'],
            ['id_grupo' => 10, 'id_aula' => 8, 'dia_semana' => 'Miércoles', 'hora_inicio' => '13:30:00', 'hora_fin' => '15:00:00'],
            ['id_grupo' => 11, 'id_aula' => 9, 'dia_semana' => 'Viernes', 'hora_inicio' => '16:30:00', 'hora_fin' => '18:00:00'],
            ['id_grupo' => 12, 'id_aula' => 10, 'dia_semana' => 'Martes', 'hora_inicio' => '20:00:00', 'hora_fin' => '21:30:00'],

            // Docente 4 
            ['id_grupo' => 13, 'id_aula' => 11, 'dia_semana' => 'Lunes', 'hora_inicio' => '14:00:00', 'hora_fin' => '16:00:00'],
            ['id_grupo' => 14, 'id_aula' => 12, 'dia_semana' => 'Jueves', 'hora_inicio' => '14:00:00', 'hora_fin' => '16:00:00'],
            ['id_grupo' => 15, 'id_aula' => 14, 'dia_semana' => 'Viernes', 'hora_inicio' => '14:00:00', 'hora_fin' => '16:00:00'],
            ['id_grupo' => 16, 'id_aula' => 15, 'dia_semana' => 'Jueves', 'hora_inicio' => '14:00:00', 'hora_fin' => '16:00:00'],

            // Docente 5 
            ['id_grupo' => 17, 'id_aula' => 21, 'dia_semana' => 'Lunes', 'hora_inicio' => '13:30:00', 'hora_fin' => '15:00:00'],
            ['id_grupo' => 18, 'id_aula' => 22, 'dia_semana' => 'Martes', 'hora_inicio' => '20:00:00', 'hora_fin' => '21:30:00'],
            ['id_grupo' => 19, 'id_aula' => 23, 'dia_semana' => 'Viernes', 'hora_inicio' => '16:30:00', 'hora_fin' => '18:00:00'],
            ['id_grupo' => 20, 'id_aula' => 24, 'dia_semana' => 'Jueves', 'hora_inicio' => '13:30:00', 'hora_fin' => '15:00:00'],

            // Docente 6 
            ['id_grupo' => 21, 'id_aula' => 16, 'dia_semana' => 'Lunes', 'hora_inicio' => '13:30:00', 'hora_fin' => '15:00:00'],
            ['id_grupo' => 22, 'id_aula' => 22, 'dia_semana' => 'Miércoles', 'hora_inicio' => '20:00:00', 'hora_fin' => '21:30:00'],
            ['id_grupo' => 23, 'id_aula' => 23, 'dia_semana' => 'Viernes', 'hora_inicio' => '13:00:00', 'hora_fin' => '15:00:00'],
            ['id_grupo' => 24, 'id_aula' => 24, 'dia_semana' => 'Jueves', 'hora_inicio' => '20:00:00', 'hora_fin' => '21:30:00'],

            // Docente 7 
            ['id_grupo' => 25, 'id_aula' => 17, 'dia_semana' => 'Lunes', 'hora_inicio' => '07:00:00', 'hora_fin' => '08:30:00'],
            ['id_grupo' => 26, 'id_aula' => 18, 'dia_semana' => 'Miércoles', 'hora_inicio' => '07:00:00', 'hora_fin' => '08:30:00'],
            ['id_grupo' => 27, 'id_aula' => 19, 'dia_semana' => 'Viernes', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:00:00'],
            ['id_grupo' => 28, 'id_aula' => 20, 'dia_semana' => 'Jueves', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:00:00'],

            // Docente 8 
            ['id_grupo' => 29, 'id_aula' => 25, 'dia_semana' => 'Lunes', 'hora_inicio' => '10:30:00', 'hora_fin' => '12:00:00'],
            ['id_grupo' => 30, 'id_aula' => 26, 'dia_semana' => 'Miércoles', 'hora_inicio' => '10:30:00', 'hora_fin' => '12:00:00'],
            ['id_grupo' => 31, 'id_aula' => 27, 'dia_semana' => 'Viernes', 'hora_inicio' => '12:00:00', 'hora_fin' => '13:30:00'],
            ['id_grupo' => 32, 'id_aula' => 1, 'dia_semana' => 'Jueves', 'hora_inicio' => '12:00:00', 'hora_fin' => '13:30:00'],

            // Docente 9 
            ['id_grupo' => 33, 'id_aula' => 2, 'dia_semana' => 'Lunes', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:00:00'],
            ['id_grupo' => 34, 'id_aula' => 3, 'dia_semana' => 'Miércoles', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:00:00'],
            ['id_grupo' => 35, 'id_aula' => 4, 'dia_semana' => 'Viernes', 'hora_inicio' => '07:00:00', 'hora_fin' => '08:30:00'],
            ['id_grupo' => 36, 'id_aula' => 5, 'dia_semana' => 'Jueves', 'hora_inicio' => '07:00:00', 'hora_fin' => '08:30:00'],

            // Docente 10 
            ['id_grupo' => 37, 'id_aula' => 21, 'dia_semana' => 'Lunes', 'hora_inicio' => '07:00:00', 'hora_fin' => '08:30:00'],
            ['id_grupo' => 38, 'id_aula' => 22, 'dia_semana' => 'Martes', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:00:00'],
            ['id_grupo' => 39, 'id_aula' => 23, 'dia_semana' => 'Jueves', 'hora_inicio' => '10:30:00', 'hora_fin' => '12:00:00'],
            ['id_grupo' => 40, 'id_aula' => 24, 'dia_semana' => 'Viernes', 'hora_inicio' => '12:00:00', 'hora_fin' => '13:30:00'],

            // Docente 11 
            ['id_grupo' => 41, 'id_aula' => 6, 'dia_semana' => 'Lunes', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:00:00'],
            ['id_grupo' => 42, 'id_aula' => 7, 'dia_semana' => 'Martes', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:00:00'],
            ['id_grupo' => 43, 'id_aula' => 8, 'dia_semana' => 'Viernes', 'hora_inicio' => '10:30:00', 'hora_fin' => '12:00:00'],
            ['id_grupo' => 44, 'id_aula' => 9, 'dia_semana' => 'Jueves', 'hora_inicio' => '12:00:00', 'hora_fin' => '13:30:00'],

            // Docente 12 
            ['id_grupo' => 45, 'id_aula' => 10, 'dia_semana' => 'Lunes', 'hora_inicio' => '10:30:00', 'hora_fin' => '12:00:00'],
            ['id_grupo' => 46, 'id_aula' => 11, 'dia_semana' => 'Miércoles', 'hora_inicio' => '12:00:00', 'hora_fin' => '13:30:00'],
            ['id_grupo' => 47, 'id_aula' => 12, 'dia_semana' => 'Viernes', 'hora_inicio' => '07:00:00', 'hora_fin' => '08:30:00'],
            ['id_grupo' => 48, 'id_aula' => 13, 'dia_semana' => 'Martes', 'hora_inicio' => '07:00:00', 'hora_fin' => '08:30:00'],

            // Docente 13 
            ['id_grupo' => 49, 'id_aula' => 22, 'dia_semana' => 'Jueves', 'hora_inicio' => '07:00:00', 'hora_fin' => '08:30:00'],
            ['id_grupo' => 50, 'id_aula' => 14, 'dia_semana' => 'Miércoles', 'hora_inicio' => '08:00:00', 'hora_fin' => '10:00:00'],
            ['id_grupo' => 51, 'id_aula' => 15, 'dia_semana' => 'Viernes', 'hora_inicio' => '08:00:00', 'hora_fin' => '10:00:00'],

            // Docente 14 
            ['id_grupo' => 52, 'id_aula' => 16, 'dia_semana' => 'Jueves', 'hora_inicio' => '12:00:00', 'hora_fin' => '13:30:00'],
            ['id_grupo' => 53, 'id_aula' => 17, 'dia_semana' => 'Martes', 'hora_inicio' => '12:00:00', 'hora_fin' => '13:30:00'],
            ['id_grupo' => 54, 'id_aula' => 18, 'dia_semana' => 'Viernes', 'hora_inicio' => '07:00:00', 'hora_fin' => '08:30:00'],

            // Docente 15 
            ['id_grupo' => 55, 'id_aula' => 19, 'dia_semana' => 'Lunes', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:00:00'],
            ['id_grupo' => 56, 'id_aula' => 20, 'dia_semana' => 'Miércoles', 'hora_inicio' => '10:30:00', 'hora_fin' => '12:00:00'],
            ['id_grupo' => 57, 'id_aula' => 25, 'dia_semana' => 'Viernes', 'hora_inicio' => '12:00:00', 'hora_fin' => '13:30:00'],

        ]);
    }
}
