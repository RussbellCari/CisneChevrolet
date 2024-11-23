<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProformaForm extends Form
{
    #[Rule('required')]
    public  $id;
    public $nombre, $fecha_emision,$subtotal,$impuestos,$total;
    public $cliente_id,$vehiculo_id,$vehiculocliente_id,$repuesto_id,$mantenimiento_id;
}
