<?php

namespace App\Livewire\Admin;

use App\Models\Attendance;
use App\Models\Group;
use App\Models\Member;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class AttendanceMain extends Component{
    use WithPagination;
    use WireUiActions;
    public $isOpen=false;
    public $search,$group_id;
    public $attendances,$studies;

    public function mount(){
        $this->attendances=Attendance::where('date',now()->toDateString())->pluck('study','member_id');
        //$this->studies=Attendance::pluck('study');
    }

    public function render(){
        $members=Member::where('firstname','LIKE','%'.$this->search.'%')
                        ->where('active',true)->Where('group_id',$this->group_id)->get();
        $groups=Group::all();
        $leaders=Member::where('position','MAESTRO(A)')
                        ->Where('group_id',$this->group_id)->orWhere('position','ASOCIADO(A)')->Where('group_id',$this->group_id)->get();
        return view('livewire.admin.attendance-main',compact('members','groups','leaders'));
    }

    public function study_save(Member $member,$days){
        $fechaHoy = now()->toDateString();
        $registroExistente = Attendance::where('date',$fechaHoy)->where('member_id',$member->id)->first();
        if ($registroExistente) {
            $registroExistente->study=$days;
            $registroExistente->save();
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Dias de estudio se actualizado...',
            ]);
        }else{
            Attendance::create([
                'status'=>'P',
                'study'=>$days,
                'date'=>Carbon::now(),
                'member_id'=>$member->id,
            ]);
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Dias de estudio registrado...',
            ]);
        }
        $this->attendances=Attendance::where('date',now()->toDateString())->pluck('study','member_id');
    }


    public function updatingSearch(){
        $this->resetPage();
    }
}
