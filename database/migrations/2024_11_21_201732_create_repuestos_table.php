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
        Schema::create('repuestos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del repuesto
            $table->text('descripcion')->nullable(); // Descripción del repuesto
            $table->decimal('precio', 10, 2); // Precio del repuesto
            $table->integer('stock'); // Cantidad en inventario
            $table->string('codigo_repuesto')->unique(); // Código único del repuesto
            $table->string('marca');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repuestos');
    }
};
