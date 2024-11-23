<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::insert([
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'correo' => 'juan.perez@email.com',
                'telefono' => '1234567890',
                'direccion' => 'Calle Ficticia 123, Ciudad ABC',
                'fecha_nacimiento' => Carbon::create('1990', '06', '15'),
                'tipo_cliente' => 'individual',
                'identificacion' => 'JPE123456',
            ],
            [
                'nombre' => 'María',
                'apellido' => 'López',
                'correo' => 'maria.lopez@email.com',
                'telefono' => '9876543210',
                'direccion' => 'Avenida Central 456, Ciudad XYZ',
                'fecha_nacimiento' => Carbon::create('1985', '02', '10'),
                'tipo_cliente' => 'empresa',
                'identificacion' => 'MLP654321',
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'González',
                'correo' => 'carlos.gonzalez@email.com',
                'telefono' => '5551234567',
                'direccion' => 'Boulevard de la Paz 789, Ciudad DEF',
                'fecha_nacimiento' => Carbon::create('1992', '11', '20'),
                'tipo_cliente' => 'individual',
                'identificacion' => 'CGZ987654',
            ],
            [
                'nombre' => 'Laura',
                'apellido' => 'Martínez',
                'correo' => 'laura.martinez@email.com',
                'telefono' => '3216549870',
                'direccion' => 'Calle Luna 321, Ciudad GHI',
                'fecha_nacimiento' => Carbon::create('1995', '07', '05'),
                'tipo_cliente' => 'empresa',
                'identificacion' => 'LMT123987',
            ],
            [
                'nombre' => 'Pedro',
                'apellido' => 'Rodríguez',
                'correo' => 'pedro.rodriguez@email.com',
                'telefono' => '6543210987',
                'direccion' => 'Avenida del Sol 555, Ciudad JKL',
                'fecha_nacimiento' => Carbon::create('1988', '03', '30'),
                'tipo_cliente' => 'individual',
                'identificacion' => 'PRD456789',
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Sánchez',
                'correo' => 'ana.sanchez@email.com',
                'telefono' => '8765432109',
                'direccion' => 'Calle Primavera 234, Ciudad MNO',
                'fecha_nacimiento' => Carbon::create('1998', '12', '01'),
                'tipo_cliente' => 'empresa',
                'identificacion' => 'ASC321654',
            ],
            [
                'nombre' => 'Miguel',
                'apellido' => 'Ramírez',
                'correo' => 'miguel.ramirez@email.com',
                'telefono' => '4321098765',
                'direccion' => 'Calle San Juan 876, Ciudad PQR',
                'fecha_nacimiento' => Carbon::create('1994', '09', '17'),
                'tipo_cliente' => 'individual',
                'identificacion' => 'MGR159753',
            ],
            [
                'nombre' => 'Patricia',
                'apellido' => 'Torres',
                'correo' => 'patricia.torres@email.com',
                'telefono' => '5432109876',
                'direccion' => 'Avenida Norte 654, Ciudad STU',
                'fecha_nacimiento' => Carbon::create('1983', '05', '25'),
                'tipo_cliente' => 'empresa',
                'identificacion' => 'PTT753159',
            ],
            [
                'nombre' => 'Luis',
                'apellido' => 'Vargas',
                'correo' => 'luis.vargas@email.com',
                'telefono' => '6549873210',
                'direccion' => 'Calle Libertad 543, Ciudad VWX',
                'fecha_nacimiento' => Carbon::create('1996', '08', '19'),
                'tipo_cliente' => 'individual',
                'identificacion' => 'LVG321654',
            ],
            [
                'nombre' => 'Sofía',
                'apellido' => 'García',
                'correo' => 'sofia.garcia@email.com',
                'telefono' => '7894561230',
                'direccion' => 'Calle Río 987, Ciudad YZA',
                'fecha_nacimiento' => Carbon::create('2000', '04', '12'),
                'tipo_cliente' => 'empresa',
                'identificacion' => 'SGC654987',
            ],
        ]);

    }
}

