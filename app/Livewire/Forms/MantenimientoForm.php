<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class MantenimientoForm extends Form
{
    #[Rule('required|string')]
    public $descripcion;

    #[Rule('required|numeric')]
    public $costo;

    #[Rule('required|exists:vehiculo_clientes,id')]
    public $vehiculocliente_id;

    public $id;
}
