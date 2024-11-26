<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DisponibilidadAtencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserta múltiples registros de disponibilidad con fechas y horas
        DB::table('disponibilidad_atencion')->insert([
            [
                'fecha' => Carbon::today()->addDays(1)->toDateString(),
                'hora' => '09:00:00',
                'estado' => true,  // Estado 'true' para disponible
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::today()->addDays(1)->toDateString(),
                'hora' => '10:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::today()->addDays(2)->toDateString(),
                'hora' => '11:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::today()->addDays(2)->toDateString(),
                'hora' => '14:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::today()->addDays(3)->toDateString(),
                'hora' => '15:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::today()->addDays(3)->toDateString(),
                'hora' => '16:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::today()->addDays(4)->toDateString(),
                'hora' => '09:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::today()->addDays(4)->toDateString(),
                'hora' => '11:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
