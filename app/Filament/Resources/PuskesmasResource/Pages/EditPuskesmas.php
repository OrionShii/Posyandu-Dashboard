<?php

namespace App\Filament\Resources\PuskesmasResource\Pages;

use App\Filament\Resources\PuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPuskesmas extends EditRecord
{
    protected static string $resource = PuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
