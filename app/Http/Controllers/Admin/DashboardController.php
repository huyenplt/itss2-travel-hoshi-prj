<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Place\PlaceRequest;
use App\Services\Interfaces\PlaceService;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Place;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    protected $placeService;

    public function __construct(PlaceService $placeService)
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

        return view('admin.pages.dashboard.manager', compact('address', 'places'));
    }

    public function detail ($id = null)
    {
        $place = $this->placeService->find($id);
        $placeImages = $place->placeImages;

        return view('admin.pages.dashboard.detail', compact('place', 'placeImages'));
    }

    public function place ($id = null)
    {
        $place = $this->placeService->find($id);
        $placeImages = $place->placeImages;

        return view('admin.pages.components.dashboard.place', compact('place', 'placeImages'));
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
                'content' => $validated['content'],
            ]);

            if($files = $request->file('file_path')){
                foreach($files as $file){
                    $file_path = Carbon::now()->format('Y_m_d') . '_' . $file->store('');
                    $url = "assets/images/place/" . Str::slug($validated['address']) . '/' . Str::slug($validated['name']);
                    $file->move(public_path($url), $file_path);
                    $place->placeImages()->create([
                        'file_path' => $url . '/' . $file_path,
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('admin.dashboard')->with('success', ' create new place success');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
        }

        return back()->with('error', ' create new place failed!');
    }

    public function edit(Place $place) {
        return view('admin.pages.dashboard.edit_place', compact('place'));
    }

    public function update(PlaceRequest $request,Place $place ) {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $placeUpdate = $this->placeService->update($place, $request->safe()->only(['name', 'address', 'content']));

            if ($files = $request->file('file_path')) {
                $place->placeImages()->delete();
                foreach($files as $file){
                    $file_path = Carbon::now()->format('Y_m_d') . '_' . $file->store('');
                    $file->move(public_path("/assets/images/place/{$validated['name']}"), $file_path);
                    $place->placeImages()->create([
                        'file_path' => $file_path,
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('admin.dashboard')->with('success', ' update place success');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
        }
    }

    public function delete ($id = null)
    {
        DB::beginTransaction();
        try {
            $url = "assets/images/place/" . Str::slug($this->placeService->find($id)->address) . '/' . Str::slug($this->placeService->find($id)->name);
            $file_path = public_path($url);
            File::deleteDirectory($file_path);
            $this->placeService->delete($id);

            DB::commit();
            return redirect()->route('admin.dashboard')->with('success', 'Delete success');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
        }

        return back()->with('error', 'Delete failed!');
    }
}
