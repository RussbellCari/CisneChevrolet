<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //Dashboard
       Permission::create([
        'name'=>'Ver dashboard'
    ]);
    //Grupos
    Permission::create([
        'name'=>'Listar grupo'
    ]);
    Permission::create([
        'name'=>'Crear grupo'
    ]);
    Permission::create([
        'name'=>'Editar grupo'
    ]);
    Permission::create([
        'name'=>'Eliminar grupo'
    ]);
    //miembros
    Permission::create([
        'name'=>'Listar miembros'
    ]);
    Permission::create([
        'name'=>'Crear miembros'
    ]);
    Permission::create([
        'name'=>'Editar miembros'
    ]);
    Permission::create([
        'name'=>'Eliminar miembros'
    ]);
       //registro
    Permission::create([
        'name'=>'Buscar grupo'
    ]);

    Permission::create([
        'name'=>'Registrar asistencia'
    ]);
    Permission::create([
        'name'=>'Registra comunión'
    ]);
    Permission::create([
        'name'=>'Registrar relación'
    ]);
    Permission::create([
        'name'=>'Registrar misión'
    ]);

    }
}
