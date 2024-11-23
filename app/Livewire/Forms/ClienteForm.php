<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ClienteForm extends Form
{
    #[Rule('required')]
    public   $nombre;
    public   $apellido ;
    public  $correo;
    public $telefono;
    public  $direccion;
    public  $fecha_nacimiento;
    public $tipo_cliente;
    public $identificacion;
    public  $id;
}
