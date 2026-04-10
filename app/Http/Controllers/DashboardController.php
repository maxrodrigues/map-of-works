<?php

namespace App\Http\Controllers;

use App\Charts\WorksMunicipality;
use App\Models\Work;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $works = Work::selectRaw('municipality, COUNT(1) as count')->groupBy('municipality')->get();
        
        $chart = new WorksMunicipality();

        $chart->title('Obras Por Município');
        $chart->options([
            'legend' => [
                'display' => false,
            ],
        ]);
        $chart->labels($works->pluck('municipality'));
        $chart->dataset('Obras Por Município', 'line', $works->pluck('count'))
            ->color('rgb(255, 99, 132)')
            ->fill(false);
        
        

        return view('dashboard', compact('chart'));
    }
}
