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
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $role;
    public $tag_id;
    public $faculty_id;

    public function mount($facultyId)
    {
        // dd($id);
        $user = User::find($facultyId);

        $this->facultyId = $facultyId;
        $this->firstname = $user->firstname;
        $this->lastname = $user->lastname;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->role = $user->role;
        $this->tag_id = $user->tag_id;
    }

    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
        'tag_id' => 'required',
    ];

    protected $validationAttributes = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'Email',
        'password' => 'Password',
        'role' => 'Role',
        'tag_id' => 'Tag id',
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function editFaculty()
    {
        $customMessages = [
            'email.required' => 'The email field is required.',
            'email.unique' => 'The email has already been taken.',
            'email.email' => 'The email must be a valid email address.',
            'email.required_if' => 'The email field is required when the role is faculty.',
            'email.regex' => 'Required @tup.edu.ph.',
        ];

        $validateData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email:rfc,dns,filter|required_if:role,faculty|regex:/^[A-Za-z0-9._%+-]+@tup\.edu\.ph$/i',
            'password' => 'required',
            'role' => 'required',
            'tag_id' => 'required',
        ], $customMessages);
        User::find($this->facultyId)->update($validateData);
        $this->closeModal();
        $this->emit('updateShowFaculty');
    }

    public function render()
    {
        return view('livewire.edit-faculty');
    }
}
