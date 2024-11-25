<?php

namespace Database\Seeders;

use App\Models\Reserva;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reserva::insert([
            [
                'cliente_id' => 1,
                'vehiculo_id' => 1,
                'pago' => 150.00,
                'fecha_reserva' => Carbon::create('2024', '11', '01'),
            ],
            [
                'cliente_id' => 2,
                'vehiculo_id' => 2,
                'pago' => 100.00,
                'fecha_reserva' => Carbon::create('2024', '11', '05'),
            ],
            [
                'cliente_id' => 3,
                'vehiculo_id' => 3,
                'pago' => 250.00,
                'fecha_reserva' => Carbon::create('2024', '11', '10'),
            ],
            [
                'cliente_id' => 4,
                'vehiculo_id' => 4,
                'pago' => 200.00,
                'fecha_reserva' => Carbon::create('2024', '11', '15'),
            ],
            [
                'cliente_id' => 5,
                'vehiculo_id' => 5,
                'pago' => 300.00,
                'fecha_reserva' => Carbon::create('2024', '11', '20'),
            ],
            [
                'cliente_id' => 6,
                'vehiculo_id' => 6,
                'pago' => 180.00,
                'fecha_reserva' => Carbon::create('2024', '11', '22'),
            ],
            [
                'cliente_id' => 7,
                'vehiculo_id' => 7,
                'pago' => 220.00,
                'fecha_reserva' => Carbon::create('2024', '11', '25'),
            ],
            [
                'cliente_id' => 8,
                'vehiculo_id' => 8,
                'pago' => 130.00,
                'fecha_reserva' => Carbon::create('2024', '11', '28'),
            ],
            [
                'cliente_id' => 9,
                'vehiculo_id' => 9,
                'pago' => 90.00,
                'fecha_reserva' => Carbon::create('2024', '11', '30'),
            ],
            [
                'cliente_id' => 10,
                'vehiculo_id' => 10,
                'pago' => 160.00,
                'fecha_reserva' => Carbon::create('2024', '11', '03'),
            ],
        ]);
    }
}
