<?php

namespace App\Filament\Resources\GrafikResource\Pages;

use App\Filament\Resources\GrafikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGrafiks extends ListRecords
{
    protected static string $resource = GrafikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
