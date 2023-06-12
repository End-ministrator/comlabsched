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

    public $dateFilter = null;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSingleSortingEnabled();
        $this->setFiltersStatus(true);
    }

    public function query(): Builder
    {
        $query = parent::query();

        // Apply date filter if it is set
        if ($this->dateFilter) {
            $query->whereDate('created_at', Carbon::parse($this->dateFilter)->format('Y-m-d'));
        }

        return $query;
    }

    public function filters(): array
    {
        return [
            DateFilter::make('Verified From')
                ->filter(function (Builder $query, $value) {
                    if ($value) {
                        $date = Carbon::createFromFormat('Y-m-d', $value)->startOfDay();
                        $query->whereDate('created_at', '>=', $date);
                    }
                }),
        ];
    }
    
    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable()
                ->searchable(),

            Column::make("RFID Tag", "rfid")
                ->sortable()
                ->searchable(),

            Column::make("Status", "status")
                ->sortable(),

            Column::make("Logged at", "created_at")
                ->sortable(),
        ];
    }
}
