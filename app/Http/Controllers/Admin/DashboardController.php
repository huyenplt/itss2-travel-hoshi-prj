<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Place\PlaceRequest;
use App\Services\Interfaces\PlaceService;
use Illuminate\Http\Request;
use App\Services\Interfaces\PlaceImageService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    protected $placeService;
    protected $placeImagesService;

    public function __construct(PlaceService $placeService, PlaceImageService $placeImagesService)
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

        return view('admin.pages.dashboard.manager', compact('address', 'places'));
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

    public function create(Request $request)
    {
        $address = urldecode($request->query('address')) ?? '';

        return view('admin.pages.dashboard.create_place', compact('address'));
    }

    public function store(PlaceRequest $request)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $place = $this->placeService->create([
                'name' => $validated['name'],
                'address' => $validated['address'],
                'content' => $validated['content']
            ]);

            $file_path = Carbon::now()->format('Y_m_d') . '_' . $request->file('file_path')->store('');
            $request->file('file_path')->move(public_path('/assets/images/place'), $file_path);
    
            $this->placeImagesService->create([
                'place_id' => $place->id,
                'file_path' => $file_path,
            ]);

            DB::commit();
            return redirect()->route('admin.dashboard')->with('success', ' create new place success');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
        }

        return back()->with('error', ' create new place failed!');
    }

    public function delete ($id = null)
    {
        if ($this->placeService->delete($id)) {
            return redirect()->route('admin.dashboard')->with('success', 'Delete success');
        }

        return back()->with('error', 'Delete failed!');
    }
}
