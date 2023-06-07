<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use LivewireUI\Modal\ModalComponent;

class EditSchedule extends ModalComponent
{
    public $scheduleId;
    public $title;
    public $user_id;
    public $start_time;
    public $end_time;

    public $laboratory;
    public $school_year;
    public $semester;
    public $schedule_id;

    public function mount($scheduleId)
    {
        $schedule = Schedule::find($scheduleId);
        $this->scheduleId = $scheduleId;
        $this->title = $schedule->title;
        $this->user_id = $schedule->user_id;
        $this->start_time = $schedule->start_time;
        $this->end_time = $schedule->end_time;
        $this->laboratory = $schedule->laboratory;
        $this->school_year = $schedule->school_year;
        $this->semester = $schedule->semester;
    }

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

    //Realtime Validation - Kada input, vinavalidate agad
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function editSched()
    {
        $validatedData = $this->validate(); // Validate after submit button is clicked
        Schedule::find($this->scheduleId)->update($validatedData);
        $this->closeModal();
        $this->emit('updateShowFaculty');
    }

    public function render()
    {
        return view('livewire.edit-schedule');
    }
}
