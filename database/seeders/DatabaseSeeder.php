<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call(ClienteSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(VehiculoClienteSeeder::class);
        $this->call(RepuestoSeeder::class);
        $this->call(MantenimientoSeeder::class);
        $this->call(ProformaSeeder::class);
        $this->call(ReservaSeeder::class);
        $this->call(NotaVentaSeeder::class);



    }
}
