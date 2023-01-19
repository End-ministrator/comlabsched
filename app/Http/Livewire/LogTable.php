<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Log;

class LogTable extends DataTableComponent
{
    protected $model = Log::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("RFID Tag", "rfid")
                ->sortable(),
            Column::make("Status", "status")
                ->sortable(),
            Column::make("Logged at", "created_at")
                ->sortable(),
        ];
    }
}
