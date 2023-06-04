<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;


class ShowFaculty extends ModalComponent
{

    // public $users;
    public $faculties;
    public $openEditFacultyModal = false;

    protected $listeners = [
        'updateShowFaculty' => 'refreshData'
    ];


    // public function mount()
    // {
    //     $this->users = new User();
    //     $this->refreshData();
    // }

    public function refreshData()
    {
        $this->faculties = User::all(); // Refresh the faculties data
    }

    public function render()
    {

        return view('livewire.show-faculty');
    }
}
