<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Log;

use Illuminate\Database\Eloquent\Builder;

class LogTable extends DataTableComponent
{
    protected $model = Log::class;


    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSingleSortingEnabled();
    }


    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable()
                ->searchable(),

            Column::make("RFID Tag", "rfid")
                ->sortable(),

            Column::make("Status", "status")
                ->sortable(),

            Column::make("Logged at", "created_at")
                ->sortable(),
        ];
    }
}
