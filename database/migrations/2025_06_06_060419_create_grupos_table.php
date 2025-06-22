<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->bigIncrements('id_grupo');
            $table->string('grupo', 10);

            $table->unsignedBigInteger('id_profesor');
            $table->unsignedBigInteger('id_materia');

            $table->foreign('id_profesor')->references('id_docente')->on('docente')->onDelete('cascade');
            $table->foreign('id_materia')->references('id')->on('materia')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
