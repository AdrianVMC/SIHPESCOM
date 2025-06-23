<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GruposSeeder extends Seeder
{
    public function run()
    {
        DB::table('grupos')->insert([

            // Docente 1
            ['grupo' => '1CV1', 'id_profesor' => 1, 'id_materia' => 3],
            ['grupo' => '2CV1', 'id_profesor' => 1, 'id_materia' => 7],
            ['grupo' => '3CV1', 'id_profesor' => 1, 'id_materia' => 12],
            ['grupo' => '4CV1', 'id_profesor' => 1, 'id_materia' => 19],

            // Docente 2
            ['grupo' => '1CV2', 'id_profesor' => 2, 'id_materia' => 4],
            ['grupo' => '2CV2', 'id_profesor' => 2, 'id_materia' => 8],
            ['grupo' => '3CV2', 'id_profesor' => 2, 'id_materia' => 13],
            ['grupo' => '4CV2', 'id_profesor' => 2, 'id_materia' => 21],

            // Docente 3
            ['grupo' => '2CV3', 'id_profesor' => 3, 'id_materia' => 10],
            ['grupo' => '3CV3', 'id_profesor' => 3, 'id_materia' => 16],
            ['grupo' => '5CV1', 'id_profesor' => 3, 'id_materia' => 30],
            ['grupo' => '6CV1', 'id_profesor' => 3, 'id_materia' => 35],

            // Docente 4
            ['grupo' => '2CV4', 'id_profesor' => 4, 'id_materia' => 7],
            ['grupo' => '3CV4', 'id_profesor' => 4, 'id_materia' => 12],
            ['grupo' => '4CV4', 'id_profesor' => 4, 'id_materia' => 20],
            ['grupo' => '5CV4', 'id_profesor' => 4, 'id_materia' => 26],

            // Docente 5
            ['grupo' => '3CV5', 'id_profesor' => 5, 'id_materia' => 13],
            ['grupo' => '3CV6', 'id_profesor' => 5, 'id_materia' => 14],
            ['grupo' => '4CV5', 'id_profesor' => 5, 'id_materia' => 21],
            ['grupo' => '5CV5', 'id_profesor' => 5, 'id_materia' => 27],

            // Docente 6
            ['grupo' => '1CV6', 'id_profesor' => 6, 'id_materia' => 2],
            ['grupo' => '3CV7', 'id_profesor' => 6, 'id_materia' => 14],
            ['grupo' => '4CV6', 'id_profesor' => 6, 'id_materia' => 22],
            ['grupo' => '5CV6', 'id_profesor' => 6, 'id_materia' => 28],

            // Docente 7
            ['grupo' => '1CM1', 'id_profesor' => 7, 'id_materia' => 2],
            ['grupo' => '2CM1', 'id_profesor' => 7, 'id_materia' => 15],
            ['grupo' => '4CM1', 'id_profesor' => 7, 'id_materia' => 23],
            ['grupo' => '5CM1', 'id_profesor' => 7, 'id_materia' => 29],

            // Docente 8
            ['grupo' => '1CM2', 'id_profesor' => 8, 'id_materia' => 1],
            ['grupo' => '2CM2', 'id_profesor' => 8, 'id_materia' => 11],
            ['grupo' => '3CM2', 'id_profesor' => 8, 'id_materia' => 18],
            ['grupo' => '4CM2', 'id_profesor' => 8, 'id_materia' => 24],

            // Docente 9
            ['grupo' => '1CM3', 'id_profesor' => 9, 'id_materia' => 1],
            ['grupo' => '2CM3', 'id_profesor' => 9, 'id_materia' => 11],
            ['grupo' => '3CM3', 'id_profesor' => 9, 'id_materia' => 17],
            ['grupo' => '4CM3', 'id_profesor' => 9, 'id_materia' => 25],

            // Docente 10
            ['grupo' => '5CM4', 'id_profesor' => 10, 'id_materia' => 32],
            ['grupo' => '6CM4', 'id_profesor' => 10, 'id_materia' => 37],
            ['grupo' => '7CM4', 'id_profesor' => 10, 'id_materia' => 40],
            ['grupo' => '7CM1', 'id_profesor' => 10, 'id_materia' => 41],

            // Docente 11
            ['grupo' => '3CM5', 'id_profesor' => 11, 'id_materia' => 17],
            ['grupo' => '4CM5', 'id_profesor' => 11, 'id_materia' => 23],
            ['grupo' => '6CM1', 'id_profesor' => 11, 'id_materia' => 34],
            ['grupo' => '7CM2', 'id_profesor' => 11, 'id_materia' => 38],

            // Docente 12
            ['grupo' => '1CM6', 'id_profesor' => 12, 'id_materia' => 5],
            ['grupo' => '2CM6', 'id_profesor' => 12, 'id_materia' => 9],
            ['grupo' => '8CM6', 'id_profesor' => 12, 'id_materia' => 43],
            ['grupo' => '8CM1', 'id_profesor' => 12, 'id_materia' => 44],

            // Docente 13
            ['grupo' => '6CM7', 'id_profesor' => 13, 'id_materia' => 33],
            ['grupo' => '6CM6', 'id_profesor' => 13, 'id_materia' => 36],
            ['grupo' => '7CM6', 'id_profesor' => 13, 'id_materia' => 39],

            // Docente 14
            ['grupo' => '2CM7', 'id_profesor' => 14, 'id_materia' => 11],
            ['grupo' => '4CM7', 'id_profesor' => 14, 'id_materia' => 25],
            ['grupo' => '5CM7', 'id_profesor' => 14, 'id_materia' => 31],

            // Docente 15
            ['grupo' => '6AV1', 'id_profesor' => 15, 'id_materia' => 35],
            ['grupo' => '8AV4', 'id_profesor' => 15, 'id_materia' => 42],
            ['grupo' => '8AV2', 'id_profesor' => 15, 'id_materia' => 43],

        ]);
    }
}
