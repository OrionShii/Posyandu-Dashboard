<?php

namespace App\Filament\Widgets;

use App\Models\Balita; // Import the Balita model
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class DashChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Pembuatan Data Balita Bulan December';
    protected static string $color = 'danger';
    protected function getData(): array
    {
        $data = Trend::model(Balita::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Data Balita',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];;
    }

    protected function getType(): string
    {
        return 'line';
    }
}
