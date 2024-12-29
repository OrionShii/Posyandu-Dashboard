<?php

namespace App\Filament\Resources\PuskesmasResource\Pages;

use App\Filament\Resources\PuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPuskesmas extends ListRecords
{
    protected static string $resource = PuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
