<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ShowSchedule extends ModalComponent
{

    public $schedules;

    protected $listeners = [
        'updateShowFaculty' => 'refreshData'
    ];


    public function refreshData()
    {
        $this->schedules = Schedule::all(); // Refresh the faculties data
    }
    

    public function render()
    {
        return view('livewire.show-schedule');
    }
}
