<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->bigIncrements('id'); // Clave primaria técnica
            $table->string('clave')->unique(); // Clave institucional o identificador lógico
            $table->string('nombre_materia');
            $table->string('academia');
            $table->integer('semestre');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materia');
    }
};
