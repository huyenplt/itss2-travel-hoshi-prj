<?php

namespace App\Http\Controllers\Admin;
use App\Models\Place;
use App\Http\Controllers\Controller;
use App\Services\PlaceServiceImpl;

class DashboardController extends Controller
{
    protected $placeService;

    public function __construct(PlaceServiceImpl $placeService)
    {
        $this->placeService = $placeService;
    }
    
    public function index () {
        $places = $this->placeService->paginate(10);

        return view('admin.pages.dashboard.index', compact('places'));
    }
}
