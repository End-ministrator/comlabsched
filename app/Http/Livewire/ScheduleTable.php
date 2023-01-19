<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Schedule;

class ScheduleTable extends DataTableComponent
{
    protected $model = Schedule::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Start time", "start_time")
                ->sortable(),
            Column::make("End time", "end_time")
                ->sortable(),
            Column::make("Days", "days")
                ->sortable(),
            Column::make("Faculty ID", "faculty_id")
                ->sortable(),
            Column::make("Laboratory", "laboratory")
                ->sortable(),
            Column::make("School year", "school_year")
                ->sortable(),
            Column::make("Semester", "semester")
                ->sortable(),
        ];
    }
}
