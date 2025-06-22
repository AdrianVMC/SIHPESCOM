<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAulaTable extends Migration
{
    public function up(): void
    {
        Schema::create('aula', function (Blueprint $table) {
            $table->id('id_aula');
            $table->string('nombre_aula', 25);
            $table->enum('tipo', ['Aula', 'Laboratorio']);
            $table->string('edificio', 25);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aula');
    }
}
