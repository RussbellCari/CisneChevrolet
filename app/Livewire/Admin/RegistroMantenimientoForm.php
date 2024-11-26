<?php


namespace App\Livewire\Admin;
use Livewire\Component;
use App\Models\RegistroMantenimiento;
use App\Models\DisponibilidadAtencion;
use App\Models\VehiculoCliente;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class RegistroMantenimientoForm extends Component
{
    public $vehiculo_cliente_id;
    public $descripcion;
    public $costo;
    public $disponibilidad_atencion_id;
    public $vehiculos;
    public $disponibilidades;
    public $fechasDisponibles;
public $horariosDisponibles = null;

    public $selectedDate;
    public $selectedTime;


    public function mount($selectedDate, $selectedTime)
    {
        // Obtener los datos pasados por la ruta
        $this->selectedDate = $selectedDate;
        $this->selectedTime = $selectedTime;

        // Cargar los vehículos y disponibilidades
        $this->vehiculos = VehiculoCliente::with('vehiculo', 'cliente')->get();
        $this->disponibilidades = DisponibilidadAtencion::where('fecha', $this->selectedDate)
            ->where('hora', $this->selectedTime)
            ->get();
    }

    public function submit()
    {
        // Validar datos
        $this->validate([
            'vehiculo_cliente_id' => 'required|exists:vehiculo_clientes,id',
            'descripcion' => 'required|string|max:255',
            'costo' => 'required|numeric|min:0',
            'disponibilidad_atencion_id' => 'required|exists:disponibilidad_atencion,id',
        ]);

        // Verificar si la disponibilidad está ocupada
        $disponibilidad = DisponibilidadAtencion::find($this->disponibilidad_atencion_id);
        if ($disponibilidad && RegistroMantenimiento::where('disponibilidad_atencion_id', $disponibilidad->id)->exists()) {
            session()->flash('message', 'La fecha y hora seleccionada ya están ocupadas.');
            return;
        }

        // Guardar el mantenimiento
        RegistroMantenimiento::create([
            'vehiculo_cliente_id' => $this->vehiculo_cliente_id,
            'descripcion' => $this->descripcion,
            'costo' => $this->costo,
            'disponibilidad_atencion_id' => $this->disponibilidad_atencion_id,
        ]);

        session()->flash('message', 'Mantenimiento registrado exitosamente.');

        // Redirigir a la pantalla principal de consulta de disponibilidad
        return redirect()->route('mantenimientos');
    }

    public function render()
    {
        return view('livewire.admin.mantenimiento-create');
    }
}
