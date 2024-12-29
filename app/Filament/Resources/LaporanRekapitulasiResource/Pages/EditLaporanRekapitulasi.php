<?php

namespace App\Filament\Resources\LaporanRekapitulasiResource\Pages;

use App\Filament\Resources\LaporanRekapitulasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanRekapitulasi extends EditRecord
{
    protected static string $resource = LaporanRekapitulasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
