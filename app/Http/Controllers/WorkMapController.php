<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Services\WorkService;
use Illuminate\Http\Request;

class WorkMapController extends Controller
{
    public function __construct(private WorkService $workService){}
    
    public function __invoke()
    {
        $locations = $this->workService->getMapLocations();
        return view('work-map', compact('locations'));
    }
}
