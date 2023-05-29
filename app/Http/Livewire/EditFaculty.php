<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditFaculty extends ModalComponent
{
    public $faculties;
    public $faculty;
 
    public $facultyId;
    public $name;
    public $email;
    public $password;
    public $role;
    public $tag_id;
    public $permissions;
    public $faculty_id;

    public function mount($facultyId)
    {
        // dd($id);
        $user = User::find($facultyId);

        $this->facultyId = $facultyId;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->role = $user->role;
        $this->tag_id = $user->tag_id;
        $this->permissions = $user->permissions;
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
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'role' => 'Role',
        'tag_id' => 'Tag id',
        'permissions' => 'Permissions',
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function editFaculty()
    {
        $validateData = $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
            'tag_id' => 'required',
            'permissions' => 'required',
        ]);
        User::find($this->facultyId)->update($validateData);
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.edit-faculty');
    }
}
