<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MantenimientoForm extends Form
{
    #[Rule('required')]
    public   $descripcion ;
    public   $costo ;
    public  $id;
}
