<?php

// app/Filament/Resources/GrafikResource.php
namespace App\Filament\Resources;

use App\Filament\Resources\GrafikResource\Pages;
use App\Models\Grafik;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class GrafikResource extends Resource
{
    protected static ?string $model = Grafik::class;
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_balita')
                    ->relationship('balita', 'nama')
                    ->required(),
                Select::make('id_pengukuran')
                    ->relationship('pengukuran', 'id')
                    ->required(),
                DatePicker::make('tanggal')->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('balita.nama'),
                TextColumn::make('pengukuran.id')->label('ID Pengukuran'),
                TextColumn::make('pengukuran.tinggi_badan')->label('Tinggi Badan'),
                TextColumn::make('pengukuran.berat_badan')->label('Berat Badan'),
                TextColumn::make('tanggal')->date(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGrafiks::route('/'),
            'create' => Pages\CreateGrafik::route('/create'),
            'edit' => Pages\EditGrafik::route('/{record}/edit'),
        ];
    }
}
