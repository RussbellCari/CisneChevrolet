<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class VehiculoForm extends Form
{
    #[Rule('required')]
    public   $marca ;
    public   $modelo ;
    public  $anio;
    public $stock;
    public  $color;
    public  $tipo;
    public $numero_motor;
    public $kilometraje;
    public  $fecha_registro;
    public  $id;
}
