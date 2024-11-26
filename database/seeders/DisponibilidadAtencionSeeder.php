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
                'fecha' => Carbon::create(2024, 12, 1)->toDateString(),
                'hora' => '09:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 1)->toDateString(),
                'hora' => '11:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 1)->toDateString(),
                'hora' => '13:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 1)->toDateString(),
                'hora' => '15:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 2)->toDateString(),
                'hora' => '09:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 2)->toDateString(),
                'hora' => '11:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 2)->toDateString(),
                'hora' => '13:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 2)->toDateString(),
                'hora' => '15:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Semana 2
            [
                'fecha' => Carbon::create(2024, 12, 3)->toDateString(),
                'hora' => '09:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 3)->toDateString(),
                'hora' => '11:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 3)->toDateString(),
                'hora' => '13:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 3)->toDateString(),
                'hora' => '15:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 4)->toDateString(),
                'hora' => '09:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 4)->toDateString(),
                'hora' => '11:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 4)->toDateString(),
                'hora' => '13:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 4)->toDateString(),
                'hora' => '15:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 5)->toDateString(),
                'hora' => '09:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 5)->toDateString(),
                'hora' => '11:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 5)->toDateString(),
                'hora' => '13:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 5)->toDateString(),
                'hora' => '15:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 6)->toDateString(),
                'hora' => '09:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 6)->toDateString(),
                'hora' => '11:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 6)->toDateString(),
                'hora' => '13:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 6)->toDateString(),
                'hora' => '15:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 7)->toDateString(),
                'hora' => '09:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 7)->toDateString(),
                'hora' => '11:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 7)->toDateString(),
                'hora' => '13:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha' => Carbon::create(2024, 12, 7)->toDateString(),
                'hora' => '15:00:00',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
}
}
