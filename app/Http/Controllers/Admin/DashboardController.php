<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Services\PlaceServiceImpl;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $placeService;

    public function __construct(PlaceServiceImpl $placeService)
    {
        $this->placeService = $placeService;
    }

    public function index () 
    {
        $addresses = $this->placeService->getAddressPlace()->paginate(10);

        return view('admin.pages.dashboard.index', compact('addresses'));
    }

    public function manager (Request $request) 
    {
        $address = urldecode($request->query('address')) ?? null;
        $places = $this->placeService->getPlaceByAddressName($address);

        return view('admin.pages.dashboard.manager', compact('places'));
    }

    public function detail ($id = null) 
    {
        $place = $this->placeService->find($id);

        return view('admin.pages.dashboard.detail', compact('place'));
    }

    public function place ($id = null) 
    {
        $place = $this->placeService->find($id);

        return view('admin.pages.dashboard.place', compact('place'));
    }

    public function delete ($id = null) 
    {
        if ($this->placeService->delete($id)) {
            return redirect()->route('admin.dashboard')->with('success', 'Delete success');
        }

        return back()->with('error', 'Delete failed!');
    }
}
