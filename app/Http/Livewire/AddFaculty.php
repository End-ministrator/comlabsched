<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class AddFaculty extends ModalComponent
{
    public $faculties;

    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $role;
    public $tag_id;


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
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
        'tag_id' => 'required',
    ];


    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function saveFaculty()
    {
        $customMessages = [
            'email.required' => 'The email field is required.',
            'email.unique' => 'The email has already been taken.',
            'email.email' => 'The email must be a valid email address.',
            'email.required_if' => 'The email field is required when the role is faculty.',
            'email.regex' => 'Required @tup.edu.ph.',
        ];

        $validatedData = $this->validate([

            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users|email:rfc,dns,filter|required_if:role,faculty|regex:/^[A-Za-z0-9._%+-]+@tup\.edu\.ph$/i',
            'password' => 'required',
            'role' => 'required',
            'tag_id' => 'required',

        ], $customMessages);
        
        $validatedData['firstname'] = Str::ucfirst($validatedData['firstname']);
        $validatedData['lastname'] = Str::ucfirst($validatedData['lastname']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Validate after submit button is clicked
        User::create($validatedData);
        $this->closeModal();
        $this->emit('updateShowFaculty');
    }
    public function render()
    {
        return view('livewire.add-faculty');
    }
}
