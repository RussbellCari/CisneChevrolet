<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\GroupForm;
use App\Livewire\Forms\RepuestoForm;
use App\Livewire\Forms\VehiculoForm;
use App\Models\Group;
use App\Models\Repuesto;
use App\Models\Vehiculo;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class VehiculoMain extends Component{

    use WithPagination;
    use WireUiActions;

    public $isOpen=false;
    public $search,$active=true;
    public VehiculoForm $form;
    public ?Vehiculo $vehiculo;

    public function render(){
        $vehiculos = Vehiculo::where('marca', 'LIKE', '%' . $this->search . '%')
        ->paginate();        return view('livewire.admin.vehiculo-main',compact('vehiculos'));
    }

    public function confirmSimple($vehiculo): void{
        $this->dialog()->confirm([
            'title'=> '¿Seguro que deseas eliminar el registro?',
            'icon'=> 'error',
            'method'=> 'destroy',
            'params'=> $vehiculo
        ]);
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['vehiculo']);
        $this->resetValidation();
    }

    public function edit(Vehiculo $vehiculo){
        // dd($member);
        $this->vehiculo=$vehiculo;
        $this->form->fill($vehiculo);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function destroy(Vehiculo $vehiculo){
        //$member->delete();
        $vehiculo->update(['active'=>false]);
        //return redirect()->route('members');
        $this->notification()->send([
            'icon' => 'info',
            'title' => 'El miembro paso al grupo inactivos',
        ]);
    }

    public function store(){
        $this->validate();
        if(!isset($this->vehiculo->id)){
            Vehiculo::create($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro creado...',
            ]);
        }else{
            $this->vehiculo->update($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro actualizado...',
            ]);
        }
        $this->reset(['isOpen']);
    }


    public function renovate(Vehiculo $vehiculo){
        $vehiculo->update(['active'=>true]);
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Se restauró al miembro al grupo activos',
        ]);
    }

    public function updatingSearch(){
        $this->resetPage();
    }

}
