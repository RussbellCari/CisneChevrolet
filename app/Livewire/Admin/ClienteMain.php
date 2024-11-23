<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\ClienteForm;
use App\Livewire\Forms\MemberForm;
use App\Models\Cliente;
use App\Models\Group;
use App\Models\Member;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class ClienteMain extends Component{

    use WithPagination;
    use WireUiActions;

    public $isOpen=false;
    public $search;
    public ClienteForm $form;
    public ?Cliente $cliente;
    public $active=true;

    public function render(){
        $clientes=Cliente::where('nombre','LIKE','%'.$this->search.'%')->latest('id')->paginate();
        return view('livewire.admin.cliente-main',compact('clientes'));
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
        $this->reset(['cliente']);
        $this->resetValidation();
    }

    public function edit(Cliente $cliente){
        // dd($cliente);
        $this->cliente=$cliente;
        $this->form->fill($cliente);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function destroy(Cliente $cliente){
        //$cliente->delete();
        $cliente->update(['active'=>false]);
        //return redirect()->route('members');
        $this->notification()->send([
            'icon' => 'info',
            'title' => 'El miembro paso al grupo inactivos',
        ]);
    }

    public function store(){
        $this->validate();
        if(!isset($this->cliente->id)){
            Cliente::create($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro creado...',
            ]);
        }else{
            $this->cliente->update($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro actualizado...',
            ]);
        }
        $this->reset(['isOpen']);
    }


    public function renovate(Cliente $cliente){
        $cliente->update(['active'=>true]);
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Se restauró al miembro al grupo activos',
        ]);
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
