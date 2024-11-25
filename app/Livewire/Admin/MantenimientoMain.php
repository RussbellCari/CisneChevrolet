<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\MantenimientoForm;
use App\Livewire\Forms\ProformaForm;
use App\Models\Cliente;
use App\Models\Mantenimiento;
use App\Models\Proforma;
use App\Models\Repuesto;
use App\Models\Vehiculo;
use App\Models\VehiculoCliente;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class MantenimientoMain extends Component
{

    use WithPagination;
    use WireUiActions;

    public $isOpen=false;
    public $search;
    public MantenimientoForm $form;
    public ?Mantenimiento $mantenimiento;
    public $active=true;

    public function render(){
        $mantenimientos=Mantenimiento::where('descripcion','LIKE','%'.$this->search.'%')->latest('id')->paginate();
        $vehiculo_clientes=VehiculoCliente::all();
        return view('livewire.admin.mantenimiento-main',compact('mantenimientos', 'vehiculo_clientes' ));
    }

    public function confirmSimple($item): void{
        $this->dialog()->confirm([
            'title'=> '¿Seguro que deseas eliminar?',
            'icon'=> 'error',
            'method'=> 'destroy',
            'params'=> $item
        ]);
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['mantenimiento']);
        $this->resetValidation();
    }

    public function edit(Mantenimiento $mantenimiento){
        // dd($pantenimiento);
        $this->mantenimiento=$mantenimiento;
        $this->form->fill($mantenimiento);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function destroy(Mantenimiento $mantenimiento){
        //$pantenimiento->delete();
        $mantenimiento->update(['active'=>false]);
        //return redirect()->route('members');
        $this->notification()->send([
            'icon' => 'info',
            'title' => 'El miembro paso al grupo inactivos',
        ]);
    }

    public function store()
    {
        $this->validate([
            'form.descripcion' => 'required|string',
            'form.costo' => 'required|numeric',
            'form.vehiculocliente_id' => 'required|exists:vehiculo_clientes,id',
        ]);

        if (!isset($this->mantenimiento->id)) {
            Mantenimiento::create($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro creado...',
            ]);
        } else {
            $this->mantenimiento->update($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro actualizado...',
            ]);
        }

        $this->reset(['isOpen']);
    }


    public function renovate(Mantenimiento $mantenimiento){
        $mantenimiento->update(['active'=>true]);
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Se restauró al miembro al grupo activos',
        ]);
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
