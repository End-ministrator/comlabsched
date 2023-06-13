<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class AddSchedule extends ModalComponent
{
    public $title;
    public $user_id;
    public $date;
    public $start_time;
    public $end_time;
    public $days;
    public $faculty_id;
    public $laboratory;
    public $school_year;
    public $semester;
    public $recurrence;
    public $recurrence_value;
    public $schedules;

    protected $rules = [
        'title' => 'required',
        'date' => 'required',
        'user_id' => 'required',
        'start_time' => 'required',
        'end_time' => 'required|after:start_time',
        'laboratory' => 'required',
        'school_year' => 'required',
        'semester' => 'required',
        'recurrence' => 'required',
        'recurrence_value' => 'required',
    ];

    protected $validationAttributes = [

        'title' => 'Title',
        'date' => 'Date',
        'user_id' => 'User ID',
        'schedule_id' => 'Schedule ID',
        'start_time' => 'Start Time',
        'end_time' => 'End Time',
        'laboratory' => 'Laboratory',
        'school_year' => 'School Year',
        'semester' => 'Semester',
        'recurrence' => 'Recurrence',
        'recurrence_value' => 'Recurrence Value',
    ];

    protected function getScheduleValidationRules()
    {
        $rules = $this->rules;

        $rules['date'] .= '|unique:schedules,date,NULL,id,start_time,' . $this->start_time . ',end_time,' . $this->end_time . ',laboratory,' . $this->laboratory;
        $rules['start_time'] .= '|before:end_time|unique:schedules,start_time,NULL,id,date,' . $this->date . ',end_time,' . $this->end_time . ',laboratory,' . $this->laboratory;
        $rules['end_time'] .= '|after:start_time|unique:schedules,end_time,NULL,id,date,' . $this->date . ',start_time,' . $this->start_time . ',laboratory,' . $this->laboratory;

        return $rules;
    }

    public function mount()
    {
        $this->schedules = User::all()->toArray();
        // dd($this->schedules);
    }

    public function updatedRecurrence($value)
    {
        if ($value === 'none') {
            $this->recurrence_value = 0;
        }
    }


    //Realtime Validation - Kada input, vinavalidate agad
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function addSched()
    {
        $validatedData = $this->validate($this->getScheduleValidationRules());

        $recurrence = $this->recurrence;
        $recurrenceValue = $this->recurrence_value;

        // Create the initial schedule
        Schedule::create($validatedData);

        // Check if the recurrence type is "Daily"
        if ($recurrence === 'daily') {
            for ($i = 1; $i < $recurrenceValue; $i++) {
                // Clone the initial schedule and adjust the date
                $clonedSchedule = $validatedData;
                $clonedSchedule['date'] = date('Y-m-d', strtotime("+$i day", strtotime($clonedSchedule['date'])));

                // Create the repeated schedule
                Schedule::create($clonedSchedule);
            }
        }
        // Check if the recurrence type is "Weekly"
        elseif ($recurrence === 'weekly') {
            for ($i = 1; $i < $recurrenceValue; $i++) {
                // Clone the initial schedule and adjust the date
                $clonedSchedule = $validatedData;
                $clonedSchedule['date'] = date('Y-m-d', strtotime("+$i week", strtotime($clonedSchedule['date'])));

                // Create the repeated schedule
                Schedule::create($clonedSchedule);
            }
        }
        // $this->schedules = User::all()->toArray();
        // dd($this->schedules);
        $this->closeModal();
        $this->emit('updateShowFaculty');
    }
    public function addSchedAndRefresh()
    {
        $this->addSched(); // Call the existing addSched method to perform actions
    
        return redirect()->refresh(); // Reload the page
    }


    public function render()
    {
        return view('livewire.add-schedule');
    }
}
