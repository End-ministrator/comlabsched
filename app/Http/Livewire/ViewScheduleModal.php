<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ViewScheduleModal extends ModalComponent
{
    public $schedule;

    public function mount(Schedule $schedule){
        $this->schedule = $schedule;
    }

    public function render()
    {
        return view('livewire.view-schedule-modal');
    }
}
