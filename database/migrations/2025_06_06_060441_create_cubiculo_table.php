<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCubiculoTable extends Migration
{
    public function up(): void
    {
        Schema::create('cubiculo', function (Blueprint $table) {
            $table->id('id_cubiculo');
            $table->unsignedBigInteger('id_profesor');
            $table->string('nombre_cubiculo', 30);
            $table->enum('dia_semana', ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes']);
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->foreign('id_profesor')->references('id_docente')->on('docente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cubiculo');
    }
}
