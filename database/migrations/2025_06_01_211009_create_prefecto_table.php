<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prefecto', function (Blueprint $table) {
            $table->increments('no_trabajador')->startingValue(20120001);
            $table->string('nombre', 25);
            $table->string('primer_apellido', 25);
            $table->string('segundo_apellido', 25);
            $table->string('correo', 30);
            $table->string('contrasena', 200);
            //$table->date('fecha_registro')->default(DB::raw('CURRENT_DATE'));
            $table->timestamp('fecha_registro')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prefecto');
    }
};
