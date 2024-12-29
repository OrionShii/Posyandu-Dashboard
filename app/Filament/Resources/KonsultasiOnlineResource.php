<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KonsultasiOnlineResource\Pages;
use App\Models\KonsultasiOnline;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Forms\Form; // Ensure this is imported
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class KonsultasiOnlineResource extends Resource
{
    protected static ?string $model = KonsultasiOnline::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form // Updated method signature
    {
        return $form
            ->schema([
                Select::make('id_ortu')
                    ->relationship('orangTua', 'username')
                    ->required(),
                Select::make('id_kader')
                    ->relationship('kader', 'username')
                    ->required(),
                Textarea::make('keluhan')->required(),
                DatePicker::make('tanggal')->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table // Add this if it also needs updating
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('orangTua.username'),
                TextColumn::make('kader.username'),
                TextColumn::make('keluhan'),
                TextColumn::make('tanggal')->date(),
            ]);
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKonsultasiOnlines::route('/'),
            'create' => Pages\CreateKonsultasiOnline::route('/create'),
            'edit' => Pages\EditKonsultasiOnline::route('/{record}/edit'),
        ];
    }


}
