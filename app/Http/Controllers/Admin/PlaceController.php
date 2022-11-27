<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PlaceServiceImpl;
use App\Http\Requests\Admin\Place\PlaceRequest;
use App\Models\Place;

class PlaceController extends Controller
{
    protected $placeService;

    public function __construct(PlaceServiceImpl $placeService)
    {
        $this->placeService = $placeService;
    }

    public function index() {
        $places = Place::all();

        return view('admin.pages.place.index', compact('places'));
    }

    public function create() {
        return view('admin.pages.place.create');
    }

    public function store(PlaceRequest $request){
        $validated = $request->validated();

        if ($this->placeService->create($validated)) {
            return redirect()->route('admin.place.index');
        }

        return back()->with([
            'error' => 'Create failed!',
        ]);
    }

    public function edit($id) {
        $place = $this->placeService->find($id);

        return view('admin.pages.place.edit', compact('place'));
    }

    public function update($id, PlaceRequest $request) {
        $place = $this->placeService->find($id);

        $validated = $request->validated();

        if ($this->placeService->update($place, $validated)) {
            return view('admin.pages.place.edit', compact('place'));
        }

        return back()->with([
            'error' => 'Update failed!',
        ]);
    }

    public function delete($id){
        if ($this->placeService->delete($id)) {
            return redirect()->route('admin.place.index');
        }

        return back()->with([
            'error' => 'Delete failed!',
        ]);
    }
}
