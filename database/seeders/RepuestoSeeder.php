<?php

namespace Database\Seeders;

use App\Models\Repuesto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RepuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Repuesto::insert([
            [
                'nombre' => 'Bujías',
                'descripcion' => 'Juego de bujías de alto rendimiento para motores de 4 cilindros.',
                'precio' => 50.00,
                'stock' => 100,
                'codigo_repuesto' => 'BUJ-12345',
                'marca' => 'NGK',
            ],
            [
                'nombre' => 'Amortiguadores',
                'descripcion' => 'Amortiguadores traseros para SUV, diseño de alta resistencia.',
                'precio' => 120.50,
                'stock' => 80,
                'codigo_repuesto' => 'AMORT-23456',
                'marca' => 'Monroe',
            ],
            [
                'nombre' => 'Frenos de disco',
                'descripcion' => 'Juego de frenos de disco delanteros para vehículos deportivos.',
                'precio' => 150.00,
                'stock' => 50,
                'codigo_repuesto' => 'FREN-34567',
                'marca' => 'Brembo',
            ],
            [
                'nombre' => 'Filtro de aire',
                'descripcion' => 'Filtro de aire de repuesto para vehículos de pasajeros.',
                'precio' => 15.75,
                'stock' => 200,
                'codigo_repuesto' => 'FILTRO-45678',
                'marca' => 'Fram',
            ],
            [
                'nombre' => 'Aceite de motor',
                'descripcion' => 'Aceite sintético de motor para vehículos de alto rendimiento.',
                'precio' => 35.99,
                'stock' => 150,
                'codigo_repuesto' => 'ACEITE-56789',
                'marca' => 'Castrol',
            ],
            [
                'nombre' => 'Frenos de tambor',
                'descripcion' => 'Frenos de tambor para vehículos de carga ligera.',
                'precio' => 80.00,
                'stock' => 60,
                'codigo_repuesto' => 'FREN-TAMB-67890',
                'marca' => 'Valeo',
            ],
            [
                'nombre' => 'Correa de distribución',
                'descripcion' => 'Correa de distribución para motores de 6 cilindros.',
                'precio' => 45.00,
                'stock' => 120,
                'codigo_repuesto' => 'CORREA-78901',
                'marca' => 'Gates',
            ],
            [
                'nombre' => 'Batería',
                'descripcion' => 'Batería de 12V para automóviles de pasajeros.',
                'precio' => 85.00,
                'stock' => 90,
                'codigo_repuesto' => 'BAT-89012',
                'marca' => 'Bosch',
            ],
            [
                'nombre' => 'Faro delantero',
                'descripcion' => 'Faro delantero para vehículos compactos, con lámpara halógena.',
                'precio' => 75.50,
                'stock' => 70,
                'codigo_repuesto' => 'FARO-90123',
                'marca' => 'Hella',
            ],
            [
                'nombre' => 'Neumáticos',
                'descripcion' => 'Neumáticos para autos deportivos de alto rendimiento.',
                'precio' => 250.00,
                'stock' => 30,
                'codigo_repuesto' => 'NEUM-01234',
                'marca' => 'Michelin',
            ],

        ]);
    }
}
