<?php

namespace App\Http\Livewire;

use App\Models\Faculty;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;


class ShowFaculty extends ModalComponent
{

    // public Faculty $faculties
    public $faculty;
    public $faculties;

    public $name;
    public $email;
    public $password;
    public $role;
    public $tag_id;
    public $persmission;

    protected $ruels = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
        'tag_id' => 'required',
        'persmission' => 'required',
    ];

    protected $validationAttributes = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
        'tag_id' => 'required',
        'persmission' => 'required',
    ];

    public function mount()
    {
        // $this
    }

    public function updated($field)
    {
        $this->validateOnly($field); 
    }

    public function addFaculty()
    {
        $validatedData = $this->validate(); // Validate after submit button is clicked
        User::create($validatedData);
        $this->closeModal();
    }

    public function render()
    {

        return view('livewire.show-faculty');
    }
}
