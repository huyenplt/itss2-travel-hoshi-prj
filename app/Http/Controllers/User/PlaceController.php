<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\PlaceService;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    protected $placeService;

    public function __construct(PlaceService $placeService)
    {
        $this->placeService = $placeService;
    }

    public function index(Request $request)
    {
        $place_request = urldecode($request->query('place')) ?? null;
        $place = $this->placeService->getPlaceByname($place_request);
        $blogs = $place->blogs;

        return view('user.pages.place.index', compact('place', 'blogs'));
    }
}
