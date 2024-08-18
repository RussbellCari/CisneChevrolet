<?php

namespace App\Livewire\Admin;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;

class MemberMain extends Component{

    use WithPagination;
    public $isOpen=false;
    public $search;

    public function render(){
        $members=Member::where('firstname','LIKE','%'.$this->search.'%')->where('active',true)->paginate();
        return view('livewire.admin.member-main',compact('members'));
    }

    public function destroy(Member $member){
        //$member->delete();
        $member->update(['active'=>false]);
        return redirect()->route('attendance');
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
