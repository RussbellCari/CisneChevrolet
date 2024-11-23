<?php

namespace App\Livewire\Admin;

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

class ProformaMain extends Component
{

    use WithPagination;
    use WireUiActions;

    public $isOpen=false;
    public $search;
    public ProformaForm $form;
    public ?Proforma $proforma;
    public $active=true;

    public function render(){
        $proformas=Proforma::where('nombre','LIKE','%'.$this->search.'%')->latest('id')->paginate();
        $clientes=Cliente::all();
        $vehiculos=Vehiculo::all();
        $vehiculo_clientes=VehiculoCliente::all();
        $repuestos=Repuesto::all();
        $mantenimientos=Mantenimiento::all();
        return view('livewire.admin.proforma-main',compact('proformas','clientes','vehiculos', 'vehiculo_clientes','repuestos','mantenimientos' ));
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
        $this->reset(['proforma']);
        $this->resetValidation();
    }

    public function edit(Proforma $proforma){
        // dd($proforma);
        $this->proforma=$proforma;
        $this->form->fill($proforma);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function destroy(Proforma $proforma){
        //$proforma->delete();
        $proforma->update(['active'=>false]);
        //return redirect()->route('members');
        $this->notification()->send([
            'icon' => 'info',
            'title' => 'El miembro paso al grupo inactivos',
        ]);
    }

    public function store(){
        $this->validate();
        if(!isset($this->proforma->id)){
            Proforma::create($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro creado...',
            ]);
        }else{
            $this->proforma->update($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro actualizado...',
            ]);
        }
        $this->reset(['isOpen']);
    }


    public function renovate(Proforma $proforma){
        $proforma->update(['active'=>true]);
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Se restauró al miembro al grupo activos',
        ]);
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
