<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class EditSchedule extends ModalComponent
    public $recurrence;
    public $recurrence_value;
    public $schedule_id;
    public $schedules;

    public function mount($scheduleId)
    {
        $schedule = Schedule::find($scheduleId);
        $this->scheduleId = $scheduleId;
        $this->title = $schedule->title;
        $this->date = $schedule->date;
        $this->user_id = $schedule->user_id;
        $this->start_time = $schedule->start_time;
        $this->end_time = $schedule->end_time;
        $this->recurrence = $schedule->recurrence;
        $this->recurrence_value = $schedule->recurrence_value;
        $this->laboratory = $schedule->laboratory;
        $this->school_year = $schedule->school_year;
        $this->semester = $schedule->semester;
        $this->schedules = User::get()->toArray();
    }

    protected $rules = [
        'title' => 'required',
        'date' => 'required',
        'user_id' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'laboratory' => 'required',
        'school_year' => 'required',
        'semester' => 'required',
        'recurrence' => 'required',
        'recurrence_value' => 'required',
    ];

    protected $validationAttributes = [
        'title' => 'Title',
        'date' => 'required',
        'user_id' => 'User ID',
        'start_time' => 'Start Time',
        'end_time' => 'End Time',
        'laboratory' => 'Laboratory',
        'school_year' => 'School Year',
        'semester' => 'Semester',
        'recurrence' => 'Recurrence',
        'recurrence_value' => 'Recurrence Value',
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
