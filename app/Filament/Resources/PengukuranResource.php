<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengukuranResource\Pages;
use App\Models\Pengukuran;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Forms\Form; // Ensure this is imported
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class PengukuranResource extends Resource
{
    protected static ?string $model = Pengukuran::class;
    protected static ?string $navigationIcon = 'heroicon-o-scale';

    public static function form(Form $form): Form // Updated method signature
    {
        return $form
            ->schema([
                Select::make('id_balita')
                    ->relationship('balita', 'nama')
                    ->required(),
                TextInput::make('tinggi_badan')
                    ->numeric()
                    ->step(0.01)
                    ->required(),
                TextInput::make('berat_badan')
                    ->numeric()
                    ->step(0.01)
                    ->required(),
                DatePicker::make('tanggal')->required(),

            ]);
    }

    public static function table(Tables\Table $table): Tables\Table // Update if needed
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('balita.nama'),
                TextColumn::make('tinggi_badan'),
                TextColumn::make('berat_badan'),
                TextColumn::make('tanggal')->date(),
                TextColumn::make('laporanRekapitulasi')
                ->label('ID Laporan')
                ->getStateUsing(fn ($record) => $record->laporanRekapitulasi->pluck('id')->join(', ')), 
            ]);
    }
    public static function getPages(): array // Add this method
    {
        return [
            'index' => Pages\ListPengukurans::route('/'),
            'create' => Pages\CreatePengukuran::route('/create'),
            'edit' => Pages\EditPengukuran::route('/{record}/edit'),
        ];
    }
}
