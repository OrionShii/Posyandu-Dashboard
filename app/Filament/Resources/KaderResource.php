<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KaderResource\Pages;
use App\Models\Kader;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Forms\Form; // Make sure to import the Form class
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;

class KaderResource extends Resource
{
    protected static ?string $model = Kader::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form // Updated method signature
    {
        return $form
            ->schema([
                TextInput::make('username')->required(),
                TextInput::make('no_telp')->required(),
                TextInput::make('email')->email()->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table // Updated method signature
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('username'),
                TextColumn::make('no_telp'),
                TextColumn::make('email'),
            ])
            ->actions([
                Action::make('konsultasiOnline')
                    ->url(fn (Kader $record) => KonsultasiOnlineResource::getUrl('index', ['id_kader' => $record->id])),
                Action::make('laporanRekapitulasi')
                    ->url(fn (Kader $record) => LaporanRekapitulasiResource::getUrl('index', ['id_kader' => $record->id])),
            ]);
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKaders::route('/'),
            'create' => Pages\CreateKader::route('/create'),
            'edit' => Pages\EditKader::route('/{record}/edit'),
        ];
    }

}
