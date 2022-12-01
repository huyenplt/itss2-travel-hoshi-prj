<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Place\PlaceRequest;
use App\Services\PlaceServiceImpl;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Services\Interfaces\PlaceImageService;

class DashboardController extends Controller
{
    protected $placeService;

    protected $placeImagesService;

    public function __construct(PlaceServiceImpl $placeService, PlaceImageService $placeImagesService)
    {
        $this->placeService = $placeService;
        $this->placeImagesService = $placeImagesService;
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

    public function create()
    {
        $place = new Place();
        return view('admin.pages.dashboard.create_place',compact('place'));
    }

    public function store(Request $request)
    {
        if( $placeRequest = $this->placeService->create($request->only(['name', 'address', 'content'])))
        $image = $request->file('image')->store('public/images/'.$placeRequest->name);
        $this->placeImagesService->create([
            'place_id' => $placeRequest->id,
            'file_path' => $image,
        ]);
        return redirect()->route('admin.dashboard')->with('success', ' create new place success');
    }

    public function delete ($id = null)
    {
        if ($this->placeService->delete($id)) {
            return redirect()->route('admin.dashboard')->with('success', 'Delete success');
        }

        return back()->with('error', 'Delete failed!');
    }
}
