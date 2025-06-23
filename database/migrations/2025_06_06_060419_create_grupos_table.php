<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    public function up(): void
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id('id_grupo');
            $table->string('grupo', 4);
            $table->unsignedBigInteger('id_profesor');
            $table->unsignedBigInteger('id_materia');
            $table->foreign('id_profesor')->references('id_docente')->on('docente');
            $table->foreign('id_materia')->references('id_materia')->on('materia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
}
