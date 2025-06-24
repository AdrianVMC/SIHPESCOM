<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DocenteSeeder;
use Database\Seeders\MateriaSeeder;
use Database\Seeders\AulaSeeder;
use Database\Seeders\GruposSeeder;
use Database\Seeders\HorariosSeeder;
use Database\Seeders\CubiculoSeeder;
use Database\Seeders\AlumnoSeeder;
use Database\Seeders\PrefectoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DocenteSeeder::class,
            MateriaSeeder::class,
            AulaSeeder::class,
            GruposSeeder::class,
            HorariosSeeder::class,
            CubiculoSeeder::class,
            AlumnoSeeder::class,
            PrefectoSeeder::class,
        ]);
    }
}
