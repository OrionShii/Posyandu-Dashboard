<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\OrangTua;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class DashChartOrtu extends ChartWidget
{
    protected static ?string $heading = 'Grafik Pembuatan Data Orang Tua Bulan December';
    protected static string $color = 'success';
    protected function getData(): array
    {
        $data = Trend::model(OrangTua::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Data Orang Tua',
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
