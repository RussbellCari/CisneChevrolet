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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();

            // Relación con la tabla 'clientes'
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');

            // Relación con la tabla 'vehiculos' (vehículo reservado)
            $table->unsignedBigInteger('vehiculo_id');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');

            
            $table->decimal('pago', 10, 2)->nullable(); // Monto de la reserva
            $table->date('fecha_reserva'); // Fecha en la que se hizo la reserva

            // Timestamps para saber cuándo se creó o actualizó
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
