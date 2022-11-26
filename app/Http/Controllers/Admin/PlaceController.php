<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PlaceServiceImpl;
use App\Http\Requests\Admin\Place\PlaceRequest;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    protected $placeService;

    public function __construct(PlaceServiceImpl $placeService)
    {
        $this->placeService = $placeService;
    }

    public function index() {
        $places = Place::all();

        return view('place.index', compact('places'));
    }

    public function create() {
        return view('place.create');
    }

    public function store(PlaceRequest $request){
        $validated = $request->validated();
        if($validated) {
            $this->placeService->create($validated);
            return redirect()->route('admin.place.index');
        }
    }

    public function edit($id) {
        $place = Place::findOrFail($id);

        return view('place.edit', compact('place'));
    }

    public function update($id, PlaceRequest $request) {
        $place = Place::findOrFail($id);

        $validated = $request->validated();

        $this->placeService->update($place, $validated);

        return view('place.edit', compact('place'));
    }

    public function delete($id){
        $this->placeService->remove($id);

        return redirect()->route('admin.place.index');
    }
}
