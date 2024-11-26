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
        Schema::create('registro_mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehiculo_cliente_id')->constrained('vehiculo_clientes')->onDelete('cascade');
            $table->foreignId('disponibilidad_atencion_id')->constrained('disponibilidad_atencion')->onDelete('cascade')->unique();
            $table->text('descripcion')->nullable();
            $table->decimal('costo', 10, 2)->nullable();
            $table->timestamps();
        });

    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_mantenimientos');
    }
};
