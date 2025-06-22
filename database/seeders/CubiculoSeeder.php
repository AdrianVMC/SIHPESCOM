<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CubiculoSeeder extends Seeder
{
    public function run()
    {
        DB::table('cubiculo')->insert([

            // Docente 1 (Horario en la mañana)
            ['id_profesor' => 1, 'nombre_cubiculo' => 'Cubículo 101', 'dia_semana' => 'Lunes', 'hora_inicio' => '08:00:00', 'hora_fin' => '12:00:00'],
            ['id_profesor' => 1, 'nombre_cubiculo' => 'Cubículo 101', 'dia_semana' => 'Miércoles', 'hora_inicio' => '08:00:00', 'hora_fin' => '12:00:00'],
            ['id_profesor' => 1, 'nombre_cubiculo' => 'Cubículo 101', 'dia_semana' => 'Jueves', 'hora_inicio' => '08:00:00', 'hora_fin' => '12:00:00'],
            ['id_profesor' => 1, 'nombre_cubiculo' => 'Cubículo 101', 'dia_semana' => 'Viernes', 'hora_inicio' => '08:00:00', 'hora_fin' => '12:00:00'],
            // Docente 2 (Horario en la mañana)
            ['id_profesor' => 2, 'nombre_cubiculo' => 'Cubículo 102', 'dia_semana' => 'Lunes', 'hora_inicio' => '09:00:00', 'hora_fin' => '12:00:00'],
            ['id_profesor' => 2, 'nombre_cubiculo' => 'Cubículo 102', 'dia_semana' => 'Martes', 'hora_inicio' => '09:00:00', 'hora_fin' => '12:00:00'],
            ['id_profesor' => 2, 'nombre_cubiculo' => 'Cubículo 102', 'dia_semana' => 'Jueves', 'hora_inicio' => '09:00:00', 'hora_fin' => '12:00:00'],
            ['id_profesor' => 2, 'nombre_cubiculo' => 'Cubículo 102', 'dia_semana' => 'Viernes', 'hora_inicio' => '09:00:00', 'hora_fin' => '12:00:00'],

            // Docente 3 (Horario en la mañana)
            ['id_profesor' => 3, 'nombre_cubiculo' => 'Cubículo 103', 'dia_semana' => 'Lunes', 'hora_inicio' => '07:00:00', 'hora_fin' => '11:00:00'],
            ['id_profesor' => 3, 'nombre_cubiculo' => 'Cubículo 103', 'dia_semana' => 'Martes', 'hora_inicio' => '07:00:00', 'hora_fin' => '11:00:00'],
            ['id_profesor' => 3, 'nombre_cubiculo' => 'Cubículo 103', 'dia_semana' => 'Miércoles', 'hora_inicio' => '07:00:00', 'hora_fin' => '11:00:00'],
            ['id_profesor' => 3, 'nombre_cubiculo' => 'Cubículo 103', 'dia_semana' => 'Viernes', 'hora_inicio' => '07:00:00', 'hora_fin' => '11:00:00'],

            // Docente 4 (Horario en la mañana)
            ['id_profesor' => 4, 'nombre_cubiculo' => 'Cubículo 111', 'dia_semana' => 'Lunes', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:30:00'],
            ['id_profesor' => 4, 'nombre_cubiculo' => 'Cubículo 111', 'dia_semana' => 'Martes', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:30:00'],
            ['id_profesor' => 4, 'nombre_cubiculo' => 'Cubículo 111', 'dia_semana' => 'Jueves', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:30:00'],
            ['id_profesor' => 4, 'nombre_cubiculo' => 'Cubículo 111', 'dia_semana' => 'Viernes', 'hora_inicio' => '08:30:00', 'hora_fin' => '10:30:00'],

            // Docente 5 (Horario en la mañana)
            ['id_profesor' => 5, 'nombre_cubiculo' => 'Cubículo 112', 'dia_semana' => 'Lunes', 'hora_inicio' => '07:00:00', 'hora_fin' => '11:00:00'],
            ['id_profesor' => 5, 'nombre_cubiculo' => 'Cubículo 112', 'dia_semana' => 'Martes', 'hora_inicio' => '07:00:00', 'hora_fin' => '11:00:00'],
            ['id_profesor' => 5, 'nombre_cubiculo' => 'Cubículo 112', 'dia_semana' => 'Jueves', 'hora_inicio' => '07:00:00', 'hora_fin' => '11:00:00'],
            ['id_profesor' => 5, 'nombre_cubiculo' => 'Cubículo 112', 'dia_semana' => 'Viernes', 'hora_inicio' => '07:00:00', 'hora_fin' => '11:00:00'],

            // Docente 6 (Horario en la mañana)
            ['id_profesor' => 6, 'nombre_cubiculo' => 'Cubículo 113', 'dia_semana' => 'Lunes', 'hora_inicio' => '10:00:00', 'hora_fin' => '12:00:00'],
            ['id_profesor' => 6, 'nombre_cubiculo' => 'Cubículo 113', 'dia_semana' => 'Miércoles', 'hora_inicio' => '10:00:00', 'hora_fin' => '12:00:00'],
            ['id_profesor' => 6, 'nombre_cubiculo' => 'Cubículo 113', 'dia_semana' => 'Jueves', 'hora_inicio' => '10:00:00', 'hora_fin' => '12:00:00'],
            ['id_profesor' => 6, 'nombre_cubiculo' => 'Cubículo 113', 'dia_semana' => 'Viernes', 'hora_inicio' => '10:00:00', 'hora_fin' => '12:00:00'],

            // Docente 7 (Horario en la tarde)
            ['id_profesor' => 7, 'nombre_cubiculo' => 'Cubículo 201', 'dia_semana' => 'Lunes', 'hora_inicio' => '15:00:00', 'hora_fin' => '18:00:00'],
            ['id_profesor' => 7, 'nombre_cubiculo' => 'Cubículo 201', 'dia_semana' => 'Martes', 'hora_inicio' => '15:00:00', 'hora_fin' => '19:00:00'],
            ['id_profesor' => 7, 'nombre_cubiculo' => 'Cubículo 201', 'dia_semana' => 'Miércoles', 'hora_inicio' => '15:00:00', 'hora_fin' => '19:00:00'],
            ['id_profesor' => 7, 'nombre_cubiculo' => 'Cubículo 201', 'dia_semana' => 'Viernes', 'hora_inicio' => '15:00:00', 'hora_fin' => '19:00:00'],

            // Docente 8 (Horario en la tarde)
            ['id_profesor' => 8, 'nombre_cubiculo' => 'Cubículo 202', 'dia_semana' => 'Lunes', 'hora_inicio' => '15:00:00', 'hora_fin' => '19:30:00'],
            ['id_profesor' => 8, 'nombre_cubiculo' => 'Cubículo 202', 'dia_semana' => 'Martes', 'hora_inicio' => '16:00:00', 'hora_fin' => '20:00:00'],
            ['id_profesor' => 8, 'nombre_cubiculo' => 'Cubículo 202', 'dia_semana' => 'Miércoles', 'hora_inicio' => '16:00:00', 'hora_fin' => '20:00:00'],
            ['id_profesor' => 8, 'nombre_cubiculo' => 'Cubículo 202', 'dia_semana' => 'Viernes', 'hora_inicio' => '15:00:00', 'hora_fin' => '19:30:00'],

            // Docente 9 (Horario en la tarde)
            ['id_profesor' => 9, 'nombre_cubiculo' => 'Cubículo 203', 'dia_semana' => 'Lunes', 'hora_inicio' => '17:00:00', 'hora_fin' => '20:00:00'],
            ['id_profesor' => 9, 'nombre_cubiculo' => 'Cubículo 203', 'dia_semana' => 'Martes', 'hora_inicio' => '17:00:00', 'hora_fin' => '20:00:00'],
            ['id_profesor' => 9, 'nombre_cubiculo' => 'Cubículo 203', 'dia_semana' => 'Miércoles', 'hora_inicio' => '17:00:00', 'hora_fin' => '20:00:00'],
            ['id_profesor' => 9, 'nombre_cubiculo' => 'Cubículo 203', 'dia_semana' => 'Viernes', 'hora_inicio' => '16:00:00', 'hora_fin' => '21:00:00'],

            // Docente 10 (Horario en la tarde)
            ['id_profesor' => 10, 'nombre_cubiculo' => 'Cubículo 211', 'dia_semana' => 'Lunes', 'hora_inicio' => '15:00:00', 'hora_fin' => '18:00:00'],
            ['id_profesor' => 10, 'nombre_cubiculo' => 'Cubículo 211', 'dia_semana' => 'Miércoles', 'hora_inicio' => '15:00:00', 'hora_fin' => '18:00:00'],
             ['id_profesor' => 10, 'nombre_cubiculo' => 'Cubículo 211', 'dia_semana' => 'Jueves', 'hora_inicio' => '15:00:00', 'hora_fin' => '18:00:00'],
            ['id_profesor' => 10, 'nombre_cubiculo' => 'Cubículo 211', 'dia_semana' => 'Viernes', 'hora_inicio' => '14:00:00', 'hora_fin' => '16:00:00'],

            // Docente 11 (Horario en la tarde)
            ['id_profesor' => 11, 'nombre_cubiculo' => 'Cubículo 222', 'dia_semana' => 'Lunes', 'hora_inicio' => '17:00:00', 'hora_fin' => '21:00:00'],
            ['id_profesor' => 11, 'nombre_cubiculo' => 'Cubículo 222', 'dia_semana' => 'Martes', 'hora_inicio' => '17:00:00', 'hora_fin' => '21:00:00'],
            ['id_profesor' => 11, 'nombre_cubiculo' => 'Cubículo 222', 'dia_semana' => 'Miércoles', 'hora_inicio' => '17:00:00', 'hora_fin' => '21:00:00'],
            ['id_profesor' => 11, 'nombre_cubiculo' => 'Cubículo 222', 'dia_semana' => 'Viernes', 'hora_inicio' => '18:00:00', 'hora_fin' => '21:00:00'],

            // Docente 12 (Horario en la tarde)
            ['id_profesor' => 12, 'nombre_cubiculo' => 'Cubículo 223', 'dia_semana' => 'Lunes', 'hora_inicio' => '15:00:00', 'hora_fin' => '19:00:00'],
            ['id_profesor' => 12, 'nombre_cubiculo' => 'Cubículo 223', 'dia_semana' => 'Martes', 'hora_inicio' => '15:00:00', 'hora_fin' => '19:00:00'],
            ['id_profesor' => 12, 'nombre_cubiculo' => 'Cubículo 223', 'dia_semana' => 'Miércoles', 'hora_inicio' => '15:00:00', 'hora_fin' => '19:00:00'],
            ['id_profesor' => 12, 'nombre_cubiculo' => 'Cubículo 223', 'dia_semana' => 'Jueves', 'hora_inicio' => '15:00:00', 'hora_fin' => '19:00:00'],

            // Docente 13 (Horario en la tarde)
            ['id_profesor' => 13, 'nombre_cubiculo' => 'Cubículo 331', 'dia_semana' => 'Martes', 'hora_inicio' => '17:00:00', 'hora_fin' => '21:00:00'],
            ['id_profesor' => 13, 'nombre_cubiculo' => 'Cubículo 331', 'dia_semana' => 'Miércoles', 'hora_inicio' => '16:00:00', 'hora_fin' => '21:00:00'],
            ['id_profesor' => 13, 'nombre_cubiculo' => 'Cubículo 331', 'dia_semana' => 'Jueves', 'hora_inicio' => '16:00:00', 'hora_fin' => '21:00:00'],
            ['id_profesor' => 13, 'nombre_cubiculo' => 'Cubículo 331', 'dia_semana' => 'Viernes', 'hora_inicio' => '16:00:00', 'hora_fin' => '21:00:00'],

            // Docente 14 (Horario en la tarde)
            ['id_profesor' => 14, 'nombre_cubiculo' => 'Cubículo 332', 'dia_semana' => 'Lunes', 'hora_inicio' => '15:00:00', 'hora_fin' => '20:00:00'],
            ['id_profesor' => 14, 'nombre_cubiculo' => 'Cubículo 332', 'dia_semana' => 'Martes', 'hora_inicio' => '15:00:00', 'hora_fin' => '20:00:00'],
            ['id_profesor' => 14, 'nombre_cubiculo' => 'Cubículo 332', 'dia_semana' => 'Jueves', 'hora_inicio' => '17:00:00', 'hora_fin' => '19:00:00'],
            ['id_profesor' => 14, 'nombre_cubiculo' => 'Cubículo 332', 'dia_semana' => 'Viernes', 'hora_inicio' => '16:00:00', 'hora_fin' => '20:00:00'],

            // Docente 15 (Horario en la tarde)
            ['id_profesor' => 15, 'nombre_cubiculo' => 'Cubículo 333', 'dia_semana' => 'Lunes', 'hora_inicio' => '16:00:00', 'hora_fin' => '20:00:00'],
            ['id_profesor' => 15, 'nombre_cubiculo' => 'Cubículo 333', 'dia_semana' => 'Martes', 'hora_inicio' => '15:00:00', 'hora_fin' => '17:00:00'],
            ['id_profesor' => 15, 'nombre_cubiculo' => 'Cubículo 333', 'dia_semana' => 'Jueves', 'hora_inicio' => '16:00:00', 'hora_fin' => '21:00:00'],
            ['id_profesor' => 15, 'nombre_cubiculo' => 'Cubículo 333', 'dia_semana' => 'Viernes', 'hora_inicio' => '16:00:00', 'hora_fin' => '21:00:00'],
        ]);
    }
} 
