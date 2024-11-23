<?php

namespace Database\Seeders;

use App\Models\Proforma;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProformaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proforma::insert([
            [
                'cliente_id' => 1,
                'vehiculo_id' => null,
                'vehiculocliente_id' => 2,
                'repuesto_id' => null,
                'mantenimiento_id' => 5, // Aquí estamos combinando repuesto y mantenimiento
                'nombre' => 'Proforma 1',
                'fecha_emision' => Carbon::create('2023', '10', '01'),
                'subtotal' => 150.00,
                'impuestos' => 30.00,
                'total' => 180.00,
            ],
            [
                'cliente_id' => 2,
                'vehiculo_id' => 4,
                'vehiculocliente_id' =>null,
                'repuesto_id' => null, // Solo repuesto
                'mantenimiento_id' => null, // No mantenimiento
                'nombre' => 'Proforma 2',
                'fecha_emision' => Carbon::create('2023', '11', '15'),
                'subtotal' => 200.00,
                'impuestos' => 40.00,
                'total' => 240.00,
            ],
            [
                'cliente_id' => 3,
                'vehiculo_id' => 1,
                'vehiculocliente_id' => null,
                'repuesto_id' => null, // No repuesto
                'mantenimiento_id' => null, // Solo mantenimiento
                'nombre' => 'Proforma 3',
                'fecha_emision' => Carbon::create('2023', '09', '20'),
                'subtotal' => 120.50,
                'impuestos' => 24.10,
                'total' => 144.60,
            ],
            [
                'cliente_id' => 4,
                'vehiculo_id' => 2,
                'vehiculocliente_id' => null,
                'repuesto_id' => null, // Solo repuesto
                'mantenimiento_id' => null, // No mantenimiento
                'nombre' => 'Proforma 4',
                'fecha_emision' => Carbon::create('2023', '08', '10'),
                'subtotal' => 180.75,
                'impuestos' => 36.15,
                'total' => 216.90,
            ],
            [
                'cliente_id' => 5,
                'vehiculo_id' => null,
                'vehiculocliente_id' => 5,
                'repuesto_id' => null, // No repuesto
                'mantenimiento_id' => 4, // Solo mantenimiento
                'nombre' => 'Proforma 5',
                'fecha_emision' => Carbon::create('2023', '07', '05'),
                'subtotal' => 80.00,
                'impuestos' => 16.00,
                'total' => 96.00,
            ],
            [
                'cliente_id' => 6,
                'vehiculo_id' => null,
                'vehiculocliente_id' => null,
                'repuesto_id' => 3, // Solo repuesto
                'mantenimiento_id' => null, // No mantenimiento
                'nombre' => 'Proforma 6',
                'fecha_emision' => Carbon::create('2023', '06', '18'),
                'subtotal' => 140.50,
                'impuestos' => 28.10,
                'total' => 168.60,
            ],
            [
                'cliente_id' => 7,
                'vehiculo_id' => null,
                'vehiculocliente_id' => 7,
                'repuesto_id' => null, // No repuesto
                'mantenimiento_id' => 8, // Solo mantenimiento
                'nombre' => 'Proforma 7',
                'fecha_emision' => Carbon::create('2023', '05', '30'),
                'subtotal' => 250.00,
                'impuestos' => 50.00,
                'total' => 300.00,
            ],
            [
                'cliente_id' => 8,
                'vehiculo_id' =>null,
                'vehiculocliente_id' => null,
                'repuesto_id' => 9, // Solo repuesto
                'mantenimiento_id' => null, // No mantenimiento
                'nombre' => 'Proforma 8',
                'fecha_emision' => Carbon::create('2023', '04', '22'),
                'subtotal' => 95.00,
                'impuestos' => 19.00,
                'total' => 114.00,
            ],
            [
                'cliente_id' => 9,
                'vehiculo_id' => null,
                'vehiculocliente_id' => 9,
                'repuesto_id' => null, // No repuesto
                'mantenimiento_id' => 9, // Solo mantenimiento
                'nombre' => 'Proforma 9',
                'fecha_emision' => Carbon::create('2023', '03', '15'),
                'subtotal' => 160.00,
                'impuestos' => 32.00,
                'total' => 192.00,
            ],
            [
                'cliente_id' => 10,
                'vehiculo_id' => 10,
                'vehiculocliente_id' => null,
                'repuesto_id' => null, // Solo repuesto
                'mantenimiento_id' => null, // No mantenimiento
                'nombre' => 'Proforma 10',
                'fecha_emision' => Carbon::create('2023', '02', '28'),
                'subtotal' => 130.00,
                'impuestos' => 26.00,
                'total' => 156.00,
            ],
        ]);
    }
}
