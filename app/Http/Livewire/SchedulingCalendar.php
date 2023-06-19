<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Schedule;
use Illuminate\Support\Collection;
use Asantibanez\LivewireCalendar\LivewireCalendar;

class SchedulingCalendar extends LivewireCalendar
{
    public function events(): Collection
    {
        $schedules = Schedule::all();

        return $schedules->map(function ($schedule) {
            $startTime = Carbon::parse($schedule->start_time)->format('g:i A'); // Format as 24-hour time (e.g., 14:30)
            $endTime = Carbon::parse($schedule->end_time)->format('g:i A');

            return [
                'id' => $schedule->id,
                'title' => $schedule->title,
                'date' => Carbon::parse($schedule->date),
                'start_time' => $startTime,
                'end_time' => $endTime,
            ];
        });
    }

    public function onEventClick($eventId)
    {
        //open livewire modal
        
        $this->emit('openModal', 'edit-schedule', ['schedule' => $eventId]);
        
    }
}
