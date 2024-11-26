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
                'cliente_id' => 1, // ID de Juan Pérez
                'vehiculo_id' => 1, // ID de Toyota Corolla
                'placa' => 'ABC123', // Placa del vehículo

            ],
            [
                'cliente_id' => 2, // ID de María González
                'vehiculo_id' => 2, // ID de Honda Civic
                'placa' => 'XYZ456', // Placa del vehículo

            ],
            [
                'cliente_id' => 3, // ID de Pedro Martínez
                'vehiculo_id' => 3, // ID de Ford Focus
                'placa' => 'LMN789',

            ],
            [
                'cliente_id' => 4, // ID de Laura Fernández
                'vehiculo_id' => 4, // ID de Nissan Altima
                'placa' => 'OPQ123',

            ],
            [
                'cliente_id' => 5, // ID de Carlos Ruiz
                'vehiculo_id' => 5, // ID de Chevrolet Cruze
                'placa' => 'RST456',

            ],
            [
                'cliente_id' => 6, // ID de Ana Gómez
                'vehiculo_id' => 6, // ID de Subaru Impreza
                'placa' => 'UVW789',

            ],
            [
                'cliente_id' => 7, // ID de Luis Fernández
                'vehiculo_id' => 7, // ID de BMW 3 Series
                'placa' => 'XYZ321',

            ],
            [
                'cliente_id' => 8, // ID de Marta Sánchez
                'vehiculo_id' => 8, // ID de Audi A4
                'placa' => 'DEF987',

            ],
            [
                'cliente_id' => 9, // ID de Roberto Díaz
                'vehiculo_id' => 9, // ID de Mercedes-Benz C-Class
                'placa' => 'GHI654',

            ],
            [
                'cliente_id' => 10, // ID de Sofia López
                'vehiculo_id' => 10, // ID de Volkswagen Golf
                'placa' => 'JKL321',

            ],

        ]);
    }
}

