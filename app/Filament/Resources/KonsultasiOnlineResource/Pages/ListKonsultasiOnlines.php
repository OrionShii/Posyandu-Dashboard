<?php

namespace App\Filament\Resources\KonsultasiOnlineResource\Pages;

use App\Filament\Resources\KonsultasiOnlineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKonsultasiOnlines extends ListRecords
{
    protected static string $resource = KonsultasiOnlineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
