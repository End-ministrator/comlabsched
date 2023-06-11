<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class MonitoringCalendar extends LivewireCalendar
{

    public function events(): Collection
    {
        // $schedules = Schedule::all();

        // return $schedules->map(function ($schedule) {

        //     return [

        //         'id' => $schedule->id,
        //         'title' => $schedule->title,
        //         'start_time' => Carbon::parse($schedule->date)->setTimeFromTimeString($schedule->start_time),
        //         'end_time' => Carbon::parse($schedule->date)->setTimeFromTimeString($schedule->end_time),
        //         'date' => Carbon::parse($schedule->date),
        //     ];
        // });

        // return Schedule::query()
        //     ->whereDate('start_time', '>=', $this->gridStartsAt)
        //     ->whereDate('end_time', '<=', $this->gridEndsAt)
        //     ->get()
        //     ->map(function (Schedule $sch) {
        //         return [
        //             'id' => $sch->id,
        //             'title' => $sch->title,
        //             'date' => Carbon::parse($sch->date),
        //         ];
        //     });

        return Schedule::query()
            ->whereDate('start_time', '>=', $this->startsAt)
            ->whereDate('end_time', '<=', $this->endsAt)
            ->get()
            ->map(function (Schedule $schedule) {
                return [
                    'id' => $schedule->id,  
                    'title' => $schedule->title,
                    'date' => Carbon::parse($schedule->date),
                ];
            });
    }
}
