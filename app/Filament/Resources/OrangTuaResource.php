<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrangTuaResource\Pages;
use App\Models\OrangTua;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Forms\Form; // Ensure this is imported
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;

class OrangTuaResource extends Resource
{
    protected static ?string $model = OrangTua::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form // Updated method signature
    {
        return $form
            ->schema([
                TextInput::make('username')->required(),
                TextInput::make('no_telp')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('nik_ortu')->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table // Update if needed
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('username'),
                TextColumn::make('no_telp'),
                TextColumn::make('email'),
                TextColumn::make('nik_ortu'),
            ])
            ->actions([
                Action::make('kartuSehat')
                    ->url(fn (OrangTua $record) => KartuSehatResource::getUrl('index', ['id_ortu' => $record->id])),
                Action::make('konsultasiOnline')
                    ->url(fn (OrangTua $record) => KonsultasiOnlineResource::getUrl('index', ['id_ortu' => $record->id])),
            ]);
    }
    public static function getPages(): array // Add this method
    {
        return [
            'index' => Pages\ListOrangTuas::route('/'),
            'create' => Pages\CreateOrangTua::route('/create'),
            'edit' => Pages\EditOrangTua::route('/{record}/edit'),
        ];
    }
}
