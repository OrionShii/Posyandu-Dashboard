<?php

namespace App\Filament\Resources\PengukuranResource\Pages;

use App\Filament\Resources\PengukuranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengukurans extends ListRecords
{
    protected static string $resource = PengukuranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
