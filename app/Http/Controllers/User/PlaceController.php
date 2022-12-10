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
        $address = urldecode($request->query('address')) ?? null;
        $places = $this->placeService->getPlaceByAddressName($address);

        return view('user.pages.place.index', compact('address', 'places'));
    }
}
