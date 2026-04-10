<?php

namespace App\Http\Controllers;

use App\Charts\WorksMunicipality;
use App\Models\Work;
use App\Services\WorkService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(private WorkService $workService){}

    public function __invoke(Request $request)
    {
        $count = $this->workService->countAllWorks();
        $works = $this->workService->getWorksMunicipality();
        
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
        
        

        return view('dashboard', compact('count', 'chart'));
    }
}
