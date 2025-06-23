<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocenteSeeder extends Seeder
{
    public function run()
    {
        DB::table('docente')->insert([
            ['nombre' => 'Carlos', 'primer_apellido' => 'Ramírez', 'segundo_apellido' => 'González', 'correo_contacto' => 'cramirez@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'María', 'primer_apellido' => 'López', 'segundo_apellido' => 'Fernández', 'correo_contacto' => 'mlopez@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Luis', 'primer_apellido' => 'Hernández', 'segundo_apellido' => 'Martínez', 'correo_contacto' => 'lhernandez@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ana', 'primer_apellido' => 'Torres', 'segundo_apellido' => 'Navarro', 'correo_contacto' => 'atorres@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Javier', 'primer_apellido' => 'Pérez', 'segundo_apellido' => 'Ortiz', 'correo_contacto' => 'jperez@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Sandra', 'primer_apellido' => 'Castillo', 'segundo_apellido' => 'Morales', 'correo_contacto' => 'scastillo@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Daniel', 'primer_apellido' => 'Cruz', 'segundo_apellido' => 'Vargas', 'correo_contacto' => 'dcruz@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Laura', 'primer_apellido' => 'Jiménez', 'segundo_apellido' => 'Ruiz', 'correo_contacto' => 'ljimenez@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ernesto', 'primer_apellido' => 'Gómez', 'segundo_apellido' => 'Delgado', 'correo_contacto' => 'egomez@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Paola', 'primer_apellido' => 'Mendoza', 'segundo_apellido' => 'Ramos', 'correo_contacto' => 'pmendoza@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'José Antonio', 'primer_apellido' => 'Ortiz', 'segundo_apellido' => 'Ramírez', 'correo_contacto' => 'jantonio@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Silvia', 'primer_apellido' => 'Ortiz', 'segundo_apellido' => 'Campos', 'correo_contacto' => 'sortiz@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Héctor', 'primer_apellido' => 'Velázquez', 'segundo_apellido' => 'Domínguez', 'correo_contacto' => 'hvelazquez@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Verónica', 'primer_apellido' => 'Cortés', 'segundo_apellido' => 'Molina', 'correo_contacto' => 'vcortes@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Roberto', 'primer_apellido' => 'Estrada', 'segundo_apellido' => 'Santos', 'correo_contacto' => 'restrada@escom.ipn.mx', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
