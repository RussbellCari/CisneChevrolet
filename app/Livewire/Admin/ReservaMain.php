<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\ReservaForm;
use App\Models\Cliente;
use App\Models\Vehiculo;
use App\Models\Reserva;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class ReservaMain extends Component
{
    use WithPagination;
    use WireUiActions;

    public $isOpen = false;
    public $search;
    public ReservaForm $form;
    public ?Reserva $reserva;

    protected $rules = [
        'form.cliente_id' => 'required|exists:clientes,id',
        'form.vehiculo_id' => 'required|exists:vehiculos,id',
        'form.pago' => 'nullable|numeric',
        'form.fecha_reserva' => 'required|date',
    ];

    public function render()
    {
        $reservas = Reserva::whereHas('cliente', function ($query) {
            $query->where('nombre', 'LIKE', '%' . $this->search . '%');
        })
        ->orWhereHas('vehiculo', function ($query) {
            $query->where('modelo', 'LIKE', '%' . $this->search . '%');
        })
        ->latest('id')
        ->paginate();

        $clientes = Cliente::all();
        $vehiculos = Vehiculo::all();

        return view('livewire.admin.reserva-main', compact('reservas', 'clientes', 'vehiculos'));
    }

    public function create()
    {
        $this->isOpen = true;
        $this->form->reset();
        $this->reset(['reserva']);
        $this->resetValidation();
    }

    public function edit(Reserva $reserva)
    {
        $this->reserva = $reserva;
        $this->form->fill($reserva);
        $this->isOpen = true;
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();

        if (!isset($this->reserva->id)) {
            Reserva::create($this->form->toArray());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Reserva creada con éxito',
            ]);
        } else {
            $this->reserva->update($this->form->toArray());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Reserva actualizada con éxito',
            ]);
        }

        $this->reset(['isOpen']);
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Reserva eliminada',
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
