<?php



namespace App\Livewire\Forms;

use Livewire\Form;

class ReservaForm extends Form
{
    public $id, $cliente_id, $vehiculo_id, $pago, $fecha_reserva;

    public function toArray()
    {
        return [
            'id' => $this->id,
            'cliente_id' => $this->cliente_id,
            'vehiculo_id' => $this->vehiculo_id,
            'pago' => $this->pago,
            'fecha_reserva' => $this->fecha_reserva,
        ];
    }

    public function resetForm()
    {
        $this->reset(['id', 'cliente_id', 'vehiculo_id', 'pago', 'fecha_reserva']);
    }


    public function fill($data)
    {
        $this->id = $data->id;
        $this->cliente_id = $data->cliente_id;
        $this->vehiculo_id = $data->vehiculo_id;
        $this->pago = $data->pago;
        $this->fecha_reserva = $data->fecha_reserva;
    }
}
