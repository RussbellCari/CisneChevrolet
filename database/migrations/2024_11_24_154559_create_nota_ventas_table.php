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
        Schema::create('nota_ventas', function (Blueprint $table) {
            $table->id();

            // Relación con la tabla 'clientes'
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');

            // Relación con la tabla 'vehiculos' (opcional)
            $table->unsignedBigInteger('vehiculo_id')->nullable();
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');

            // Relación con la tabla 'vehiculo_clientes' (opcional)
            $table->unsignedBigInteger('vehiculocliente_id')->nullable();
            $table->foreign('vehiculocliente_id')->references('id')->on('vehiculo_clientes')->onDelete('cascade');

            // Relación con la tabla 'repuestos' (opcional en algunas proformas)
            $table->unsignedBigInteger('repuesto_id')->nullable(); // Puede ser nulo en algunos casos
            $table->foreign('repuesto_id')->references('id')->on('repuestos')->onDelete('cascade');

            // Relación con la tabla 'mantenimientos' (opcional en algunas proformas)
            $table->unsignedBigInteger('mantenimiento_id')->nullable(); // Puede ser nulo en algunos casos
            $table->foreign('mantenimiento_id')->references('id')->on('mantenimientos')->onDelete('cascade');

            // Relación con la tabla 'reservas' (opcional, puede ser nula)
            $table->foreignId('reserva_id')->nullable()->constrained('reservas')->onDelete('set null');

            // Otros campos para la nota de venta
            $table->string('nombre'); // Nombre del repuesto, servicio, etc.
            $table->date('fecha_emision');
            $table->decimal('subtotal', 10, 2); // Monto subtotal de la venta
            $table->decimal('pago', 10, 2)->nullable(); // Monto pagado (se tomará de la reserva si está asociada)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_ventas');


    }
};
