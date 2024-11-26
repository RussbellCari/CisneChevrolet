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
        Schema::create('disponibilidad_atencion', function (Blueprint $table) {
            $table->id(); // Identificador único
            $table->date('fecha'); // Fecha disponible
            $table->time('hora'); // Hora disponible
            $table->boolean('estado')->default(true); // Estado: TRUE (Disponible), FALSE (Ocupado)
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilidad_atencion');
    }
};
