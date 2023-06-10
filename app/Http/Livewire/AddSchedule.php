<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use LivewireUI\Modal\ModalComponent;

class AddSchedule extends ModalComponent
{
    public $title;

    public $user_id;
    public $start_time;
    public $end_time;
    public $days;
    public $faculty_id;
    public $laboratory;
    public $school_year;
    public $semester;

    protected $rules = [
        'title' => 'required',
        'user_id' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'laboratory' => 'required',
        'school_year' => 'required',
        'semester' => 'required',
    ];

    protected $validationAttributes = [
        
        'title' => 'Title',
        'user_id' => 'User ID',
        'start_time' => 'Start Time',
        'end_time' => 'End Time',
        'laboratory' => 'Laboratory',
        'school_year' => 'School Year',
        'semester' => 'Semester',
    ];

    // public function mount()
    // {
    //     $this->school_year = '2022-2023';
    //     $this->semester = '1st Semester';
    //     $this->laboratory = 'Lab 1';
    //     $this->days = 'Monday';
    // }

    //Realtime Validation - Kada input, vinavalidate agad
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function addSched()
    {
        $validatedData = $this->validate(); // Validate after submit button is clicked
        Schedule::create($validatedData);
        $this->closeModal();
        $this->emit('updateShowFaculty');
    } 


    public function render()
    {
        return view('livewire.add-schedule');
    }
}
