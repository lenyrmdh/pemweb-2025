<?php

namespace App\Filament\Admin\Resources\DataPegawaiResource\Pages;

use App\Filament\Admin\Resources\DataPegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataPegawais extends ListRecords
{
    protected static string $resource = DataPegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
