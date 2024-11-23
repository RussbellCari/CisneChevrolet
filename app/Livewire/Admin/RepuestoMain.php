<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\GroupForm;
use App\Livewire\Forms\RepuestoForm;
use App\Models\Group;
use App\Models\Repuesto;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class RepuestoMain extends Component{

    use WithPagination;
    use WireUiActions;

    public $isOpen=false;
    public $search,$active=true;
    public RepuestoForm $form;
    public ?Repuesto $repuesto;

    public function render(){
        $repuestos = Repuesto::where('nombre', 'LIKE', '%' . $this->search . '%')
        ->paginate();        return view('livewire.admin.repuesto-main',compact('repuestos'));
    }

    public function confirmSimple($repuesto): void{
        $this->dialog()->confirm([
            'title'=> '¿Seguro que deseas eliminar el registro?',
            'icon'=> 'error',
            'method'=> 'destroy',
            'params'=> $repuesto
        ]);
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['repuesto']);
        $this->resetValidation();
    }

    public function edit(Repuesto $repuesto){
        // dd($member);
        $this->repuesto=$repuesto;
        $this->form->fill($repuesto);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function destroy(Repuesto $repuesto){
        //$member->delete();
        $repuesto->update(['active'=>false]);
        //return redirect()->route('members');
        $this->notification()->send([
            'icon' => 'info',
            'title' => 'El miembro paso al grupo inactivos',
        ]);
    }

    public function store(){
        $this->validate();
        if(!isset($this->repuesto->id)){
            Repuesto::create($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro creado...',
            ]);
        }else{
            $this->repuesto->update($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro actualizado...',
            ]);
        }
        $this->reset(['isOpen']);
    }


    public function renovate(Repuesto $repuesto){
        $repuesto->update(['active'=>true]);
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Se restauró al miembro al grupo activos',
        ]);
    }

    public function updatingSearch(){
        $this->resetPage();
    }

}
