<?php

namespace App\Filament\Resources\LaporanRekapitulasiResource\Pages;

use App\Filament\Resources\LaporanRekapitulasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanRekapitulasis extends ListRecords
{
    protected static string $resource = LaporanRekapitulasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
