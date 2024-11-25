<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class ProformaForm extends Form
{
    public $id, $nombre, $fecha_emision, $subtotal, $impuestos, $total;
    public $cliente_id, $vehiculo_id, $vehiculocliente_id, $repuesto_id, $mantenimiento_id;

    public function toArray()
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'fecha_emision' => $this->fecha_emision,
            'subtotal' => $this->subtotal,
            'impuestos' => $this->impuestos,
            'total' => $this->total,
            'cliente_id' => $this->cliente_id,
            'vehiculo_id' => $this->vehiculo_id,
            'vehiculocliente_id' => $this->vehiculocliente_id,
            'repuesto_id' => $this->repuesto_id,
            'mantenimiento_id' => $this->mantenimiento_id,
        ];
    }
}
