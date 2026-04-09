<?php

namespace App\Http\Controllers;

use App\Services\WorkService;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function __construct(protected WorkService $workService){}

    public function __invoke(Request $request)
    {
        $count = $this->workService->countAllWorks();
        $works = $this->workService->getWorks();

        return view('works', compact('count', 'works'));
    }
}
