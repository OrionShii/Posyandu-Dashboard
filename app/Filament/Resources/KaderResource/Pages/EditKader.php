<?php

namespace App\Filament\Resources\KaderResource\Pages;

use App\Filament\Resources\KaderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKader extends EditRecord
{
    protected static string $resource = KaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
