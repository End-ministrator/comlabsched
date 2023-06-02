<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;


class ShowFaculty extends ModalComponent
{

    public $users;
    public $faculties;
    public $openEditFacultyModal = false;

    protected $listeners = [
        'updateShowFaculty' => '$refresh'
    ];


    public function mount()
    {
        $this->users = new User();
        $this->emit('updateShowFaculty');
    }

    public function render()
    {

        return view('livewire.show-faculty');
    }
}
