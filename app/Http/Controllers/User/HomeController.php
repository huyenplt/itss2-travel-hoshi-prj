<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\Interfaces\PlaceService;

class HomeController extends Controller
{
    protected $placeService;

    public function __construct(PlaceService $placeService)
    {
        $this->placeService = $placeService;
    }

    public function index()
    {
        $user = Auth::user();
        $data = $this->placeService->all();

        return view('user.pages.home.index', compact('user', 'data'));
    }
}
