<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Log;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use Illuminate\Database\Eloquent\Builder;

class LogTable extends DataTableComponent
{
    protected $model = Log::class;


    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSingleSortingEnabled();
        $this->setFiltersStatus(true);
    }



    public function filters(): array
    {
        return [
            DateFilter::make('Verified From'),
        ];
    }




    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable()
                ->searchable(),

            Column::make("Tag ID", "rfid")
                ->sortable()
                ->searchable(),

            Column::make("Access Granted", "access_granted")
                ->sortable(),

            Column::make("Logged at", "created_at")
                ->sortable(),
        ];
    }
}
