<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use LivewireUI\Modal\ModalComponent;

class AddSchedule extends ModalComponent
{
    public $start_time;
    public $end_time;
    public $days;
    public $faculty_id;
    public $laboratory;
    public $school_year;
    public $semester;

    protected $rules = [
        'start_time' => 'required',
        'end_time' => 'required',
        'days' => 'required',
        'faculty_id' => 'required',
        'laboratory' => 'required',
        'school_year' => 'required',
        'semester' => 'required',
    ];

    protected $validationAttributes = [
        'start_time' => 'Start Time',
        'end_time' => 'End Time',
        'days' => 'Days',
        'faculty_id' => 'Faculty',
        'laboratory' => 'Laboratory',
        'school_year' => 'School Year',
        'semester' => 'Semester',
    ];

    public function mount(){
        $this->school_year = '2022-2023';
        $this->semester = '1st Semester';
        $this->laboratory = 'Lab 1';
        $this->days = 'Monday';
    }

    //Realtime Validation - Kada input, vinavalidate agad
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function addSched(){
        $validatedData = $this->validate(); // Validate after submit button is clicked
        Schedule::create($validatedData);
        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.add-schedule');
    }
}
