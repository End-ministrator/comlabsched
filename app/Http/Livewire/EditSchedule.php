<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use LivewireUI\Modal\ModalComponent;

class EditSchedule extends ModalComponent
{
    public $start_time;
    public $end_time;
    public $days;
    public $faculty_id;
    public $laboratory;
    public $school_year;
    public $semester;
    public $schedule_id;

    public function mount($id){
        $schedule = Schedule::find($id);
        $this->schedule_id = $schedule->id;
        $this->start_time = $schedule->start_time;
        $this->end_time = $schedule->end_time;
        $this->days = $schedule->days;
        $this->faculty_id = $schedule->faculty_id;
        $this->laboratory = $schedule->laboratory;
        $this->school_year = $schedule->school_year;
        $this->semester = $schedule->semester;
    }

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

    //Realtime Validation - Kada input, vinavalidate agad
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function editSched(){
        $validatedData = $this->validate(); // Validate after submit button is clicked
        Schedule::find($this->schedule_id)->update($validatedData);
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.edit-schedule');
    }
}
