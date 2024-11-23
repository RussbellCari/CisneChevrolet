<?php

namespace Database\Seeders;

use App\Models\VehiculoCliente;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehiculoCliente::insert([
            [
                'marca' => 'Toyota',
                'modelo' => 'Toyota Corolla',
                'anio' => 2023,
                'placa' => 'ABC1234',
                'color' => 'Blanco',
                'tipo' => 'sedán',
                'numero_motor' => 'TOY123456',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2023', '11', '01'),
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Ford Mustang',
                'anio' => 2020,
                'placa' => 'XYZ5678',
                'color' => 'Negro',
                'tipo' => 'deportivo',
                'numero_motor' => 'FORD234567',
                'kilometraje' => 15000,
                'fecha_registro' => Carbon::create('2021', '05', '20'),
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Honda Civic',
                'anio' => 2022,
                'placa' => 'LMN9876',
                'color' => 'Rojo',
                'tipo' => 'sedán',
                'numero_motor' => 'HON345678',
                'kilometraje' => 5000,
                'fecha_registro' => Carbon::create('2022', '08', '15'),
            ],
            [
                'marca' => 'Nissan',
                'modelo' => 'Nissan Altima',
                'anio' => 2021,
                'placa' => 'RST1234',
                'color' => 'Azul',
                'tipo' => 'sedán',
                'numero_motor' => 'NISS456789',
                'kilometraje' => 25000,
                'fecha_registro' => Carbon::create('2021', '07', '10'),
            ],
            [
                'marca' => 'BMW',
                'modelo' => 'BMW X5',
                'anio' => 2023,
                'placa' => 'UVW4321',
                'color' => 'Gris',
                'tipo' => 'SUV',
                'numero_motor' => 'BMW567890',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2023', '04', '30'),
            ],
            [
                'marca' => 'Audi',
                'modelo' => 'Audi Q7',
                'anio' => 2020,
                'placa' => 'JKL6543',
                'color' => 'Blanco',
                'tipo' => 'SUV',
                'numero_motor' => 'AUD678901',
                'kilometraje' => 12000,
                'fecha_registro' => Carbon::create('2021', '06', '25'),
            ],
            [
                'marca' => 'Mercedes-Benz',
                'modelo' => 'Mercedes-Benz E-Class',
                'anio' => 2021,
                'placa' => 'QRS8765',
                'color' => 'Negro',
                'tipo' => 'sedán',
                'numero_motor' => 'MBZ789012',
                'kilometraje' => 8000,
                'fecha_registro' => Carbon::create('2022', '02', '18'),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Tahoe',
                'anio' => 2022,
                'placa' => 'TUV3210',
                'color' => 'Verde',
                'tipo' => 'SUV',
                'numero_motor' => 'CHV890123',
                'kilometraje' => 3000,
                'fecha_registro' => Carbon::create('2022', '11', '05'),
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Kia Sorento',
                'anio' => 2020,
                'placa' => 'OPQ4321',
                'color' => 'Rojo',
                'tipo' => 'SUV',
                'numero_motor' => 'KIA901234',
                'kilometraje' => 22000,
                'fecha_registro' => Carbon::create('2021', '03', '17'),
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Volkswagen Golf',
                'anio' => 2023,
                'placa' => 'ZXY8765',
                'color' => 'Azul',
                'tipo' => 'hatchback',
                'numero_motor' => 'VW012345',
                'kilometraje' => 0,
                'fecha_registro' => Carbon::create('2023', '09', '10'),
            ],
        ]);
    }
}

