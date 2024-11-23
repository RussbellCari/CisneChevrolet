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
        Schema::create('proformas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');

            // Relación con la tabla 'vehiculos'
            $table->unsignedBigInteger('vehiculo_id')->nullable();
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');

            // Relación con la tabla 'vehiculo_clientes'
            $table->unsignedBigInteger('vehiculocliente_id')->nullable();
            $table->foreign('vehiculocliente_id')->references('id')->on('vehiculo_clientes')->onDelete('cascade');

            // Relación con la tabla 'repuestos' (opcional en algunas proformas)
            $table->unsignedBigInteger('repuesto_id')->nullable(); // Puede ser nulo en algunos casos
            $table->foreign('repuesto_id')->references('id')->on('repuestos')->onDelete('cascade');

            // Relación con la tabla 'mantenimientos' (opcional en algunas proformas)
            $table->unsignedBigInteger('mantenimiento_id')->nullable(); // Puede ser nulo en algunos casos
            $table->foreign('mantenimiento_id')->references('id')->on('mantenimientos')->onDelete('cascade');

            $table->string('nombre'); // Nombre del repuesto
            $table->date('fecha_emision');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('impuestos', 10, 2);
            $table->decimal('total', 10, 2);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proformas');
    }
};
