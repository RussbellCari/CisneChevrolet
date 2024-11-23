<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RepuestoForm extends Form
{
    #[Rule('required')]

    public   $nombre;
    public   $descripcion ;
    public  $precio;
    public $stock;
    public  $codigo_repuesto;
    public  $marca;
    public  $id;
    }
