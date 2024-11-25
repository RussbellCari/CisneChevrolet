<?php

namespace App\Livewire\Forms;

use App\Models\Reserva;
use Livewire\Form;

class NotaVentaForm extends Form
{
    public $id, $nombre, $fecha_emision, $subtotal, $pago;
    public $cliente_id, $vehiculo_id, $vehiculocliente_id, $repuesto_id, $mantenimiento_id, $reserva_id;

    // Inicialización por defecto de las propiedades
    public function mount()
    {
        $this->id = null;
        $this->nombre = '';
        $this->fecha_emision = '';
        $this->subtotal = 0;
        $this->pago = 0;
        $this->cliente_id = null;
        $this->vehiculo_id = null;
        $this->vehiculocliente_id = null;
        $this->repuesto_id = null;
        $this->mantenimiento_id = null;
        $this->reserva_id = null;
    }

    // Método para convertir las propiedades a un arreglo
    public function toArray()
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'fecha_emision' => $this->fecha_emision,
            'subtotal' => $this->subtotal,
            'pago' => $this->pago,
            'cliente_id' => $this->cliente_id,
            'vehiculo_id' => $this->vehiculo_id,
            'vehiculocliente_id' => $this->vehiculocliente_id,
            'repuesto_id' => $this->repuesto_id,
            'mantenimiento_id' => $this->mantenimiento_id,
            'reserva_id' => $this->reserva_id,
        ];
    }
}
