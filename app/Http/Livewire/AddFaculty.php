<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddFaculty extends ModalComponent
{
    public $faculties;

    public $name;
    public $email;
    public $password;
    public $role;
    public $tag_id;
    public $permissions;



    public function render()
    {
        return view('livewire.add-faculty');
    }


    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
        'tag_id' => 'required',
        'permissions' => 'required',
    ];

    protected $validationAttributes = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
        'tag_id' => 'required',
        'permissions' => 'required',
    ];




    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function saveFaculty()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
            'tag_id' => 'required',
            'permissions' => 'required',
        ]);
        // Validate after submit button is clicked
        User::create($validatedData);
        $this->closeModal();

    }
}
