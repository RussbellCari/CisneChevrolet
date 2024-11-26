<?php

namespace App\Livewire\Admin;
use Livewire\Component;
use App\Models\VehiculoCliente;
use App\Models\DisponibilidadAtencion;
use App\Models\RegistroMantenimiento;

class ConsultaDisponibilidad extends Component
{
    public $vehiculos;
    public $disponibilidad;
    public $selectedDate;
    public $selectedTime;
    public $errorMessage;

    public function mount()
    {
        $this->vehiculos = VehiculoCliente::with('vehiculo')->get();
        $this->disponibilidad = DisponibilidadAtencion::all();
    }

    public function seleccionarFechaYHora($fecha, $hora, $id)
    {
        // Validar si la fecha y hora están disponibles
        if (RegistroMantenimiento::where('disponibilidad_atencion_id', $id)->exists()) {
            $this->errorMessage = 'La fecha y hora seleccionada ya está ocupada. Por favor, seleccione otra.';
            return;
        }

        $this->selectedDate = $fecha;
        $this->selectedTime = $hora;
        $this->errorMessage = null;
    }

    public function render()
    {
        return view('livewire.admin.consulta-disponibilidad');
    }
}
