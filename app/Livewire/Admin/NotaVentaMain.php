<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\NotaVentaForm;
use App\Models\Cliente;
use App\Models\Mantenimiento;
use App\Models\NotaVenta; // Renombramos el modelo a NotaVenta
use App\Models\Repuesto;
use App\Models\Vehiculo;
use App\Models\VehiculoCliente;
use App\Models\Reserva; // Importamos el modelo de Reserva
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class NotaVentaMain extends Component
{
    use WithPagination;
    use WireUiActions;

    public $isOpen=false;
    public $search;
    public NotaVentaForm $form;
    public ?NotaVenta $notaVenta;
    public $active = true;

    protected $rules = [
        'form.cliente_id' => 'required|exists:clientes,id',
        'form.vehiculo_id' => 'nullable|exists:vehiculos,id',
        'form.vehiculocliente_id' => 'nullable|exists:vehiculo_clientes,id',
        'form.repuesto_id' => 'nullable|exists:repuestos,id',
        'form.mantenimiento_id' => 'nullable|exists:mantenimientos,id',
        'form.reserva_id' => 'nullable|exists:reservas,id',
        'form.nombre' => 'required|string',
        'form.fecha_emision' => 'required|date',
        'form.subtotal' => 'required|numeric',
        'form.pago' => 'nullable|numeric', // El pago puede ser nulo
    ];

    public function render()
    {
        $notasVenta=NotaVenta::where('nombre','LIKE','%'.$this->search.'%')->latest('id')->paginate();
        $clientes = Cliente::all();
        $vehiculos = Vehiculo::all();
        $vehiculo_clientes = VehiculoCliente::all();
        $repuestos = Repuesto::all();
        $mantenimientos = Mantenimiento::all();
        $reservas = Reserva::all(); // Obtener las reservas

        return view('livewire.admin.nota-venta-main', compact('notasVenta', 'clientes', 'vehiculos', 'vehiculo_clientes', 'repuestos', 'mantenimientos', 'reservas'));

    }

    public function confirmSimple($item): void
    {
        $this->dialog()->confirm([
            'title' => '¿Seguro que deseas eliminar?',
            'icon' => 'error',
            'method' => 'destroy',
            'params' => $item
        ]);
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['notaVenta']);
        $this->resetValidation();
    }

    public function edit(NotaVenta $notaVenta){
        // dd($proforma);
        $this->notaVenta=$notaVenta;
        $this->form->fill($notaVenta);
        $this->isOpen=true;
        $this->resetValidation();
    }


    public function destroy(NotaVenta $notaVenta)
    {
        // Desactivamos la nota de venta en lugar de eliminarla
        $notaVenta->update(['active' => false]);

        $this->notification()->send([
            'icon' => 'info',
            'title' => 'La nota de venta ha sido desactivada',
        ]);
    }

    public function store(){
        $this->validate();
        if(!isset($this->notaVenta->id)){
            NotaVenta::create($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro creado...',
            ]);
        }else{
            $this->notaVenta->update($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro actualizado...',
            ]);
        }
        $this->reset(['isOpen']);
    }

    public function renovate(NotaVenta $notaVenta)
    {
        // Restauramos la nota de venta a activa
        $notaVenta->update(['active' => true]);

        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Se restauró la nota de venta al grupo activo',
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
