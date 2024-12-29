<?php
namespace App\Http\Controllers;

use App\Models\Balita; // Make sure to import your Balita model
use Illuminate\Http\Request;

class GrafikController extends Controller
{
    public function showGrafik()
    {
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        // Fetch the count of Balita records grouped by month
        $data = Balita::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count')
            ->toArray();

        return view('filaments.grafik', [
            'months' => $months,
            'data' => $data,
        ]);
    }
}
