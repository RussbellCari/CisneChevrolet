<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehiculo::insert([
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Aveo',
                'anio' => 2020,
                'stock' => 20,
                'color' => 'Blanco',
                'tipo' => 'vehiculo',
                'numero_motor' => 'CHRV01',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2021', '07', '15'),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Spark',
                'anio' => 2021,
                'stock' => 15,
                'color' => 'Rojo',
                'tipo' => 'SUV',
                'numero_motor' => 'CHRV02',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2022', '03', '22'),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Malibu',
                'anio' => 2019,
                'stock' => 25,
                'color' => 'Negro',
                'tipo' => 'sedan',
                'numero_motor' => 'CHRV03',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2021', '05', '10'),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Traverse',
                'anio' => 2022,
                'stock' => 30,
                'color' => 'Azul',
                'tipo' => 'SUV',
                'numero_motor' => 'CHRV04',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2023', '01', '05'),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Camaro',
                'anio' => 2023,
                'stock' => 10,
                'color' => 'Verde',
                'tipo' => 'deportivo',
                'numero_motor' => 'CHRV05',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2023', '02', '18'),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Tahoe',
                'anio' => 2020,
                'stock' => 18,
                'color' => 'Gris',
                'tipo' => 'SUV',
                'numero_motor' => 'CHRV06',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2021', '08', '25'),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Silverado',
                'anio' => 2021,
                'stock' => 12,
                'color' => 'Amarillo',
                'tipo' => 'camioneta',
                'numero_motor' => 'CHRV07',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2022', '06', '10'),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Spark',
                'anio' => 2018,
                'stock' => 22,
                'color' => 'Rojo',
                'tipo' => 'vehiculo',
                'numero_motor' => 'CHRV08',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2019', '09', '11'),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Corvette',
                'anio' => 2023,
                'stock' => 8,
                'color' => 'Blanco',
                'tipo' => 'deportivo',
                'numero_motor' => 'CHRV09',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2023', '11', '01'),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Colorado',
                'anio' => 2020,
                'stock' => 14,
                'color' => 'Azul',
                'tipo' => 'camioneta',
                'numero_motor' => 'CHRV10',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2021', '03', '30'),
            ],
        ]);

        }
}


