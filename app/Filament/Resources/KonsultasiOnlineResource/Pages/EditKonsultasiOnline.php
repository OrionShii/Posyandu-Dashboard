<?php

namespace App\Filament\Resources\KonsultasiOnlineResource\Pages;

use App\Filament\Resources\KonsultasiOnlineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKonsultasiOnline extends EditRecord
{
    protected static string $resource = KonsultasiOnlineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
