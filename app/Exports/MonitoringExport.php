<?php

namespace App\Exports;

use App\Models\Schedule;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;



class MonitoringExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Schedule::with('user')
        ->select("id", "title", "date","start_time", "end_time", "laboratory","school_year", "semester", "user_id")
        ->get();
    }
    public function headings(): array
    {
        return ["ID", "Title", "Date", "Start Time", "End Time", "Laboratory", "School Year", "Semester", "Faculty Name"];
    }

    public function map($schedule): array
    {
        $fullName = $schedule->user->firstname . ' ' . $schedule->user->lastname;

        return [
            $schedule->id,
            $schedule->title,
            $schedule->date,
            $schedule->start_time,
            $schedule->end_time,
            $schedule->laboratory,
            $schedule->school_year,
            $schedule->semester,
            $fullName,
        ];
    }
}
