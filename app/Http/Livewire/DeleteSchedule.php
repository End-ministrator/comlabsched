<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use LivewireUI\Modal\ModalComponent;

class DeleteSchedule extends ModalComponent
{

    public $scheduleId;
    public function deleteSched()
    {
        $schedule = Schedule::find($this->scheduleId);

        if ($schedule) {
            $schedule->delete();
        }

        $this->closeModal();
        $this->emit('updateShowFaculty');
    }
    public function render()
    {
        return view('livewire.delete-schedule');
    }
}
