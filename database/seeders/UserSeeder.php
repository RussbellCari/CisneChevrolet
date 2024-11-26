<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name'=>'JEFE DE TIENDA',
            'email'=>'jefe.tienda@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
        $user->assignRole('Administrador');
        User::factory()->count(3)->create();
    }
}
