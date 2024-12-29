<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KartuSehatResource\Pages;
use App\Models\KartuSehat;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Forms\Form; // Ensure the Form class is imported
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class KartuSehatResource extends Resource
{
    protected static ?string $model = KartuSehat::class;
    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form // Updated method signature
    {
        return $form
            ->schema([
                Select::make('id_ortu')
                    ->relationship('orangTua', 'username')
                    ->required(),
                DatePicker::make('masa_berlaku')->required(),
                Select::make('status_kartu')
                    ->options([
                        'aktif' => 'Aktif',
                        'tidak aktif' => 'Tidak Aktif',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table // Add this if it also needs updating
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('orangTua.username'),
                TextColumn::make('masa_berlaku')->date(),
                TextColumn::make('status_kartu'),
            ]);
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKartuSehats::route('/'),
            'create' => Pages\CreateKartuSehat::route('/create'),
            'edit' => Pages\EditKartuSehat::route('/{record}/edit'),
        ];
    }

}

