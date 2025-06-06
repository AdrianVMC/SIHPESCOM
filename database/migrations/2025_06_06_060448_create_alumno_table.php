<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    public function up(): void
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->bigIncrements('boleta')->startingValue(2025000001);
            $table->string('nombre', 25);
            $table->string('primer_apellido', 25);
            $table->string('segundo_apellido', 25);
            $table->string('contrasena', 200);
            $table->string('correo', 200);
            $table->date('fecha_registro')->default(DB::raw('CURRENT_DATE'));
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alumno');
    }
}
