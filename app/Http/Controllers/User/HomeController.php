<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\PlaceService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $placeService;

    public function __construct(PlaceService $placeService)
    {
        $this->placeService = $placeService;
    }

    public function index(Request $request)
    {
        $query = $request->query('query') ?? null;

        $places = $this->placeService->getAddressPlace($query)->get();

        return view('user.pages.home.index', compact('places', 'query'));
    }
}
