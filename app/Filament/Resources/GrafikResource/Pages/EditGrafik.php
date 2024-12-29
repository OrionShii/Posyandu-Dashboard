<?php

namespace App\Filament\Resources\GrafikResource\Pages;

use App\Filament\Resources\GrafikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGrafik extends EditRecord
{
    protected static string $resource = GrafikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
