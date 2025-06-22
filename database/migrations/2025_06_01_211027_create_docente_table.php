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
        Schema::create('docente', function (Blueprint $table) {
            $table->bigIncrements('id_docente');
            $table->string('nombre', 40);
            $table->string('primer_apellido', 25);
            $table->string('segundo_apellido', 25);
            $table->string('correo_contacto', 30);
            //$table->date('fecha_registro')->default(DB::raw('CURRENT_DATE'));
            $table->timestamp('fecha_registro')->useCurrent();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docente');
    }
};
