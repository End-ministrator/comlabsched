<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class MonitoringCalendar extends LivewireCalendar
{

    public $month;
    public $year;

    public function goToPreviousMonth()
    {
        $this->startsAt->subMonthNoOverflow();
        $this->endsAt->subMonthNoOverflow();

        $data = [
            'month' => intval($this->startsAt->format('m')),
            'year' => intval($this->startsAt->format('Y')),
        ];

        $this->month = $data['month'];
        $this->year = $data['year'];

        $this->emit('renderMonth', $data);
        $this->calculateGridStartsEnds();
    }

    public function goToNextMonth()
    {
        $this->startsAt->addMonthNoOverflow();
        $this->endsAt->addMonthNoOverflow();

        $data = [
            'month' => intval($this->startsAt->format('m')),
            'year' => intval($this->startsAt->format('Y')),
        ];

        $this->month = $data['month'];
        $this->year = $data['year'];

        $this->emit('renderMonth', $data);
        $this->calculateGridStartsEnds();
    }

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
        
        $this->emit('openModal', 'view-schedule-modal', ['schedule' => $eventId]);
    }
}
