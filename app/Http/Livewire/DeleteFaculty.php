<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DeleteFaculty extends ModalComponent
{

    public $facultyId;

    public function deleteFaculty()
    {
        $faculty = User::find($this->facultyId);

        if ($faculty){
            $faculty->delete();
        }

        $this->closeModal();
        $this->emit('updateShowFaculty');
    }
    public function render()
    {
        return view('livewire.delete-faculty');
    }
}
