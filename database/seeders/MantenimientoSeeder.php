<?php

namespace Database\Seeders;

use App\Models\Mantenimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MantenimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mantenimiento::insert([
            [
                'vehiculocliente_id' => 2,
                'descripcion' => 'Cambio de aceite y filtro de motor.',
                'costo' => 120.50,
            ],
            [
                'vehiculocliente_id' => 3,
                'descripcion' => 'Reemplazo de pastillas de freno delanteras.',
                'costo' => 85.75,
            ],
            [
                'vehiculocliente_id' => 4,
                'descripcion' => 'Revisión completa del sistema de frenos y ajuste.',
                'costo' => 150.00,
            ],
            [
                'vehiculocliente_id' => 5,
                'descripcion' => 'Reemplazo de bujías y limpieza de sistema de encendido.',
                'costo' => 75.25,
            ],
            [
                'vehiculocliente_id' => 6,
                'descripcion' => 'Cambio de correa de distribución y revisión de motor.',
                'costo' => 180.00,
            ],
            [
                'vehiculocliente_id' => 7,
                'descripcion' => 'Mantenimiento de suspensión y amortiguadores.',
                'costo' => 220.00,
            ],
            [
                'vehiculocliente_id' => 8,
                'descripcion' => 'Inspección de sistema eléctrico y reemplazo de batería.',
                'costo' => 95.00,
            ],
            [
                'vehiculocliente_id' => 9,
                'descripcion' => 'Cambio de neumáticos y alineación.',
                'costo' => 300.00,
            ],
            [
                'vehiculocliente_id' => 10,
                'descripcion' => 'Reemplazo de bomba de agua y revisión de refrigeración.',
                'costo' => 150.80,
            ],
            [
                'vehiculocliente_id' => 2,
                'descripcion' => 'Limpieza de sistema de inyección de combustible y revisión.',
                'costo' => 130.60,
            ]


        ]);

    }
}

