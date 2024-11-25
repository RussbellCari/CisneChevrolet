<?php

namespace Database\Seeders;

use App\Models\NotaVenta;
use App\Models\Reserva;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotaVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        NotaVenta::insert([
            [
                'cliente_id' => 1, // Cliente asociado manualmente
                'vehiculo_id' => 1, // Vehículo asociado manualmente
                'vehiculocliente_id' => null, // Sin vehículo cliente
                'reserva_id' => 1, // Asociación con reserva_id 1
                'repuesto_id' => null, // No hay repuesto en esta nota
                'mantenimiento_id' => null, // Mantenimiento asociado (si existe)
                'nombre' => 'NotaVenta 1',
                'fecha_emision' => Carbon::create('2024', '11', '01'),
                'subtotal' => 150.00,
                'pago' => 150.00, // El pago de la reserva se utiliza aquí
            ],
            [
                'cliente_id' => 2,
                'vehiculo_id' => 2,
                'vehiculocliente_id' => null,
                'reserva_id' => 2, // Asociación con reserva_id 2
                'repuesto_id' => null, // Repuesto asociado (si existe)
                'mantenimiento_id' => null, // No hay mantenimiento
                'nombre' => 'NotaVenta 2',
                'fecha_emision' => Carbon::create('2024', '11', '05'),
                'subtotal' => 100.00,
                'pago' => 100.00, // El pago de la reserva se utiliza aquí
            ],
            [
                'cliente_id' => 3,
                'vehiculo_id' => 3,
                'vehiculocliente_id' => null,
                'reserva_id' => 3, // Asociación con reserva_id 3
                'repuesto_id' => null, // No hay repuesto
                'mantenimiento_id' => null, // Mantenimiento asociado
                'nombre' => 'NotaVenta 3',
                'fecha_emision' => Carbon::create('2024', '11', '10'),
                'subtotal' => 250.00,
                'pago' => 250.00, // El pago de la reserva se utiliza aquí
            ],
            [
                'cliente_id' => 4,
                'vehiculo_id' => null,
                'vehiculocliente_id' => null, // Vehículo cliente específico
                'reserva_id' => null, // Asociación con reserva_id 4
                'repuesto_id' => 2, // Repuesto asociado
                'mantenimiento_id' => null, // No hay mantenimiento
                'nombre' => 'NotaVenta 4',
                'fecha_emision' => Carbon::create('2024', '11', '15'),
                'subtotal' => 200.00,
                'pago' => 200.00, // El pago de la reserva se utiliza aquí
            ],
            [
                'cliente_id' => 5,
                'vehiculo_id' => null,
                'vehiculocliente_id' => 2, // Vehículo cliente específico
                'reserva_id' => null, // Asociación con reserva_id 5
                'repuesto_id' => null, // No hay repuesto
                'mantenimiento_id' => 3, // Mantenimiento asociado
                'nombre' => 'NotaVenta 5',
                'fecha_emision' => Carbon::create('2024', '11', '20'),
                'subtotal' => 300.00,
                'pago' => 300.00, // El pago de la reserva se utiliza aquí
            ],
            [
                'cliente_id' => 4,
                'vehiculo_id' => null,
                'vehiculocliente_id' => 7, // No hay vehículo cliente
                'reserva_id' => null, // Asociación con reserva_id 6
                'repuesto_id' => null, // No hay repuesto
                'mantenimiento_id' => 4, // Mantenimiento asociado
                'nombre' => 'NotaVenta 6',
                'fecha_emision' => Carbon::create('2024', '11', '22'),
                'subtotal' => 180.00,
                'pago' => 180.00, // El pago de la reserva se utiliza aquí
            ],
            [
                'cliente_id' => 7,
                'vehiculo_id' => 7,
                'vehiculocliente_id' => null, // Vehículo cliente específico
                'reserva_id' => 7, // Asociación con reserva_id 7
                'repuesto_id' => null, // No hay repuesto
                'mantenimiento_id' => 5, // Mantenimiento asociado
                'nombre' => 'NotaVenta 7',
                'fecha_emision' => Carbon::create('2024', '11', '25'),
                'subtotal' => 220.00,
                'pago' => 220.00, // El pago de la reserva se utiliza aquí
            ],
            [
                'cliente_id' => 8,
                'vehiculo_id' => 8,
                'vehiculocliente_id' => null, // No hay vehículo cliente
                'reserva_id' => 8, // Asociación con reserva_id 8
                'repuesto_id' => null, // Repuesto asociado
                'mantenimiento_id' => null, // No hay mantenimiento
                'nombre' => 'NotaVenta 8',
                'fecha_emision' => Carbon::create('2024', '11', '28'),
                'subtotal' => 130.00,
                'pago' => 130.00, // El pago de la reserva se utiliza aquí
            ],
            [
                'cliente_id' => 9,
                'vehiculo_id' => 9,
                'vehiculocliente_id' => null, // No hay vehículo cliente
                'reserva_id' => 9, // Asociación con reserva_id 9
                'repuesto_id' => null, // No hay repuesto
                'mantenimiento_id' => null, // Mantenimiento asociado
                'nombre' => 'NotaVenta 9',
                'fecha_emision' => Carbon::create('2024', '11', '30'),
                'subtotal' => 90.00,
                'pago' => 90.00, // El pago de la reserva se utiliza aquí
            ],
            [
                'cliente_id' => 10,
                'vehiculo_id' => 10,
                'vehiculocliente_id' => null, // No hay vehículo cliente
                'reserva_id' => 10, // Asociación con reserva_id 10
                'repuesto_id' => null, // Repuesto asociado
                'mantenimiento_id' => null, // No hay mantenimiento
                'nombre' => 'NotaVenta 10',
                'fecha_emision' => Carbon::create('2024', '11', '03'),
                'subtotal' => 160.00,
                'pago' => 160.00, // El pago de la reserva se utiliza aquí
            ],
        ]);

    }
}
