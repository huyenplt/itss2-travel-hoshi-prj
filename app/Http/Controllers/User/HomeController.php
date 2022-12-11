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
        $address = $request->query('address') ?? null;
        $season = $request->query('season') ?? 0;
        $price = $request->query('price') ?? null;

        // if ($query) $places = $this->placeService->getPlaceByAddressName($query);
        // // $places = $this->placeService->getAddressPlace($query)->get();
        // else $places = $this->placeService->all()->paginate(10);

        // if ($request->ajax()) {
        //     return view('user.pages.components.place.list', compact('places', 'query'));
        // }
        $data = [
            'address' => $address,
            'season' => $season,
            'price' => $price
        ];

        $places = $this->placeService->search($data);

        return view('user.pages.home.index', compact('places', 'address', 'season', 'price'));
    }
}
