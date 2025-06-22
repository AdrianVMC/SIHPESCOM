<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocenteSeeder extends Seeder
{
    public function run()
    {
        DB::table('docente')->insert([
            ['nombre' => 'Carlos', 'primer_apellido' => 'Ramírez', 'segundo_apellido' => 'González', 'correo_contacto' => 'cramirez@escom.ipn.mx'],
            ['nombre' => 'María', 'primer_apellido' => 'López', 'segundo_apellido' => 'Fernández', 'correo_contacto' => 'mlopez@escom.ipn.mx'],
            ['nombre' => 'Luis', 'primer_apellido' => 'Hernández', 'segundo_apellido' => 'Martínez', 'correo_contacto' => 'lhernandez@escom.ipn.mx'],
            ['nombre' => 'Ana', 'primer_apellido' => 'Torres', 'segundo_apellido' => 'Navarro', 'correo_contacto' => 'atorres@escom.ipn.mx'],
            ['nombre' => 'Javier', 'primer_apellido' => 'Pérez', 'segundo_apellido' => 'Ortiz', 'correo_contacto' => 'jperez@escom.ipn.mx'],
            ['nombre' => 'Sandra', 'primer_apellido' => 'Castillo', 'segundo_apellido' => 'Morales', 'correo_contacto' => 'scastillo@escom.ipn.mx'],
            ['nombre' => 'Daniel', 'primer_apellido' => 'Cruz', 'segundo_apellido' => 'Vargas', 'correo_contacto' => 'dcruz@escom.ipn.mx'],
            ['nombre' => 'Laura', 'primer_apellido' => 'Jiménez', 'segundo_apellido' => 'Ruiz', 'correo_contacto' => 'ljimenez@escom.ipn.mx'],
            ['nombre' => 'Ernesto', 'primer_apellido' => 'Gómez', 'segundo_apellido' => 'Delgado', 'correo_contacto' => 'egomez@escom.ipn.mx'],
            ['nombre' => 'Paola', 'primer_apellido' => 'Mendoza', 'segundo_apellido' => 'Ramos', 'correo_contacto' => 'pmendoza@escom.ipn.mx'],
            ['nombre' => 'José Antonio', 'primer_apellido' => 'Ortiz', 'segundo_apellido' => 'Ramírez', 'correo_contacto' => 'jantonio@escom.ipn.mx'],
            ['nombre' => 'Silvia', 'primer_apellido' => 'Ortiz', 'segundo_apellido' => 'Campos', 'correo_contacto' => 'sortiz@escom.ipn.mx'],
            ['nombre' => 'Héctor', 'primer_apellido' => 'Velázquez', 'segundo_apellido' => 'Domínguez', 'correo_contacto' => 'hvelazquez@escom.ipn.mx'],
            ['nombre' => 'Verónica', 'primer_apellido' => 'Cortés', 'segundo_apellido' => 'Molina', 'correo_contacto' => 'vcortes@escom.ipn.mx'],
            ['nombre' => 'Roberto', 'primer_apellido' => 'Estrada', 'segundo_apellido' => 'Santos', 'correo_contacto' => 'restrada@escom.ipn.mx'],
        ]);
    }
}
