<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrefectoTable extends Migration
{
    public function up(): void
    {
        Schema::create('prefecto', function (Blueprint $table) {
            $table->bigIncrements('no_trabajador')->startingValue(20120001);
            $table->string('nombre', 25);
            $table->string('primer_apellido', 25);
            $table->string('segundo_apellido', 25);
            $table->string('correo', 100);
            $table->string('contrasena', 200);
            $table->timestamp('fecha_registro')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prefecto');
    }
}
