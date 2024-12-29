<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PuskesmasResource\Pages;
use App\Models\Puskesmas;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Forms\Form; // Make sure to import the Form class
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;

class PuskesmasResource extends Resource
{
    protected static ?string $model = Puskesmas::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Form $form): Form // Update the method signature
    {
        return $form
            ->schema([
                TextInput::make('username')->required(),
                TextInput::make('no_telp')->required(),
                TextInput::make('email')->email()->required(),
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

            ])
            ->actions([
                Action::make('laporanRekap')
                    ->url(fn (Puskesmas $record) => LaporanRekapitulasiResource::getUrl('index')),
            ]);
    }
    public static function getPages(): array // Add this method
    {
        return [
            'index' => Pages\ListPuskesmas::route('/'),
            'create' => Pages\CreatePuskesmas::route('/create'),
            'edit' => Pages\EditPuskesmas::route('/{record}/edit'),
        ];
    }
}
