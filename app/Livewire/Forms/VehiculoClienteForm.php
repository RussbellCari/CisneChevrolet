<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class VehiculoClienteForm extends Form
{
    #[Rule('required')]
    public   $marca ;
    public   $modelo ;
    public  $anio;
    public  $color;
    public  $tipo;
    public $numero_motor;
    public $kilometraje;
    public  $fecha_registro;
    public  $id;

}
