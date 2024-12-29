<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanRekapitulasiResource\Pages;
use App\Models\LaporanRekapitulasi;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class LaporanRekapitulasiResource extends Resource
{
    protected static ?string $model = LaporanRekapitulasi::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_kader')
                    ->relationship('kader', 'username')
                    ->required(),
                Select::make('id_pengukuran')
                    ->relationship('pengukuran', 'id')
                    ->required(),
                Select::make('id_puskesmas')
                    ->relationship('puskesmas', 'Username')
                    ->required(),
                DatePicker::make('tanggal')->required(),
                Textarea::make('isi_laporan')->required(),
                FileUpload::make('foto_kegiatan')
                    ->image()
                    ->directory('laporan-kegiatan')
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('kader.username')->label('Nama Kader'),
                TextColumn::make('pengukuran.id')->label('ID Pengukuran'),
                TextColumn::make('puskesmas.username')->label('Puskesmas'),
                TextColumn::make('tanggal')->date(),
                TextColumn::make('isi_laporan')->label('Isi Laporan'),
                ImageColumn::make('foto_kegiatan')->label('Foto Kegiatan'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaporanRekapitulasis::route('/'),
            'create' => Pages\CreateLaporanRekapitulasi::route('/create'),
            'edit' => Pages\EditLaporanRekapitulasi::route('/{record}/edit'),
        ];
    }
}
