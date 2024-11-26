<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistroMantenimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('registro_mantenimientos')->insert([
            [
                'vehiculo_cliente_id' => 1, // Relación Juan - Toyota
                'disponibilidad_atencion_id' => 1, // Primera disponibilidad
                'descripcion' => 'Cambio de aceite y filtro',
                'costo' => 100.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_cliente_id' => 2, // Relación María - Honda
                'disponibilidad_atencion_id' => 2, // Segunda disponibilidad
                'descripcion' => 'Revisión general',
                'costo' => 150.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
