<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\UserPlaceFavouriteService;
use App\Http\Requests\User\PlaceFavourite\UpdatePlaceFavoriteRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\UserPlaceFavourite;

class PlaceFavouriteController extends Controller
{
    protected $userPlaceFavouriteService;

    public function __construct(UserPlaceFavouriteService $userPlaceFavouriteService)
    {
        $this->userPlaceFavouriteService = $userPlaceFavouriteService;
    }

    public function store(UpdatePlaceFavoriteRequest $request)
    {
        $validated = $request->validated();
        $user = Auth::user();
        $placeFavourite = UserPlaceFavourite::firstOrCreate([
            'user_id'   => $user->id,
            'place_id' => $request['place_id']
        ]);
        if($request['like'] == 0) {
            $placeFavourite->delete();
        }
        return redirect()->back();
    }
}
