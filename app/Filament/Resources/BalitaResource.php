<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BalitaResource\Pages;
use App\Models\Balita;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;

class BalitaResource extends Resource
{
    protected static ?string $model = Balita::class;
    protected static ?string $navigationIcon = 'heroicon-o-heart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->required(),
                TextInput::make('nik_balita')->required(),
                TextInput::make('usia_balita')->numeric()->required(),
                DatePicker::make('tgl_lahir_balita')->required(),
                TextInput::make('id_ortu')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('nama'),
                TextColumn::make('nik_balita'),
                TextColumn::make('usia_balita'),
                TextColumn::make('tgl_lahir_balita')->date(),
                TextColumn::make('orangTua.id')->label('ID Orang Tua'), // Display parent ID
                TextColumn::make('orangTua.username')->label('Nama Orang Tua'), // Display parent username
            ])
            ->actions([
                Action::make('pengukuran')
                    ->url(fn (Balita $record) => PengukuranResource::getUrl('index', ['id_balita' => $record->id])),
                Action::make('grafik')
                    ->url(fn (Balita $record) => GrafikResource::getUrl('index', ['id_balita' => $record->id])),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBalitas::route('/'),
            'create' => Pages\CreateBalita::route('/create'),
            'edit' => Pages\EditBalita::route('/{record}/edit'),
        ];
    }

}
