<?php

namespace App\Http\Livewire;

use App\Models\Faculty;
use Livewire\Component;
use LivewireUI\Modal\Contracts\ModalComponent;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class ShowFaculty extends Component implements ModalComponent
{

    public Faculty $faculties;
    public $faculty;

    protected $rules = [
        'faculties.name' => 'required|string|min:6',
        'faculties.email' => 'required|string|max:500|unique:users',
    ];

    public function mount($faculty)
    {
        $this->faculties = new Faculty();
        $this->faculty = $faculty;
    }

    public function save()
    {
        $this->validate();

        $this->faculties->password = time();

        $this->faculties->save();

        return redirect()->to('/user');
    }

    public function render()
    {

       
        return view('livewire.show-faculty');
    }
}
