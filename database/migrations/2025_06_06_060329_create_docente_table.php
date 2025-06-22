<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteTable extends Migration
{
    public function up(): void
    {
        Schema::create('docente', function (Blueprint $table) {
            $table->id('id_docente');
            $table->string('nombre', 40);
            $table->string('primer_apellido', 25);
            $table->string('segundo_apellido', 25);
            $table->string('correo_contacto', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('docente');
    }
}
