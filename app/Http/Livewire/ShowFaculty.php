<?php

namespace App\Http\Livewire;

use App\Models\Faculty;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;


class ShowFaculty extends ModalComponent
{

    // public Faculty $faculties
    public User $users;
    public $faculties;
    public $openEditFacultyModal = false;

    protected $listeners = [
        'updateShowFaculty' => '$refresh'
    ];


    public function mount()
    {
        $this->users = new User();
    }

    public function render()
    {
        
        return view('livewire.show-faculty');
    }

    public function openEditFacultyModal()
    {
        $this->openEditFacultyModal = true;
    }
}
