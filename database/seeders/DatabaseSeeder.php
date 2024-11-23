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
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        //Usuario administrador
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ChurchSeeder::class);
        $this->call(PostSeeder::class);

        $this->call(DimensionSeeder::class);
        $this->call(IndicatorSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(MemberSeeder::class);

        $this->call(ClienteSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(VehiculoClienteSeeder::class);
        $this->call(RepuestoSeeder::class);
        $this->call(MantenimientoSeeder::class);
        $this->call(ProformaSeeder::class);


    }
}
