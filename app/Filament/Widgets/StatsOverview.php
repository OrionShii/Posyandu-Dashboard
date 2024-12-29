<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?string $heading = 'Overview for Parents';
    protected function getStats(): array
    {
        return [
            Stat::make('Total Balita', $this->getTotalChildren())
                ->color('success'),
            Stat::make('Total Orang Tua', $this->getTotalOrangTua())
                ->color('warning'),
            Stat::make('Total Kader', $this->getTotalKader())
                ->color('danger'),
        ];
    }

    private function getTotalChildren(): int
    {
        // Count total balita
        return \App\Models\Balita::count();
    }

    private function getTotalOrangTua(): int
    {
        // Count total orang tua
        return \App\Models\OrangTua::count(); // Assuming you have an OrangTua model
    }

    private function getTotalKader(): int
    {
        // Count total kader
        return \App\Models\Kader::count(); // Assuming you have a Kader model
    }
}
