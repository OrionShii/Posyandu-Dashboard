<?php

namespace App\Filament\Resources\KartuSehatResource\Pages;

use App\Filament\Resources\KartuSehatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKartuSehats extends ListRecords
{
    protected static string $resource = KartuSehatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
