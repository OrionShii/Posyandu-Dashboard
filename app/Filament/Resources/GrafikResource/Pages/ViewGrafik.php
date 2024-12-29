<?php
namespace App\Filament\Resources\GrafikResource\Pages;

use App\Filament\Resources\GrafikResource;
use App\Models\Grafik;
use Filament\Pages\Page;
use Illuminate\Contracts\View\View;

class ViewGrafik extends Page
{
    protected static string $resource = GrafikResource::class;

    public static function route(string $recordId): string
    {
        return '/grafiks/' . $recordId; // Ensure this matches your route definition
    }

    public function getHeader(): ?View
    {
        return view('filaments.grafik', [
            'title' => 'Detail Grafik', // Pass title to the view
        ]);
    }

    protected function getData(): array
    {
        $grafik = Grafik::with(['balita', 'pengukuran'])->find($this->recordId);

        return [
            'grafik' => $grafik,
        ];
    }
}
