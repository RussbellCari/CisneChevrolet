<?php

namespace App\Livewire\Admin;

use App\Models\RegistroMantenimiento;
use Livewire\Component;
use Livewire\WithPagination;

class MantenimientoAgendaMain extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $mantenimientos = RegistroMantenimiento::with(['vehiculoCliente.cliente', 'disponibilidadAtencion'])
            ->paginate(10);

        return view('livewire.admin.mantenimiento-main', compact('mantenimientos'));
    }

    public function agregarMantenimiento()
    {
        return redirect()->route('consulta-disponibilidad');
    }
}
