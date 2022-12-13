<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\UserPlaceFavouriteService;
use Illuminate\Support\Facades\Auth;
use App\Models\UserPlaceFavourite;
use App\Models\Place;

class PlaceFavouriteController extends Controller
{
    protected $userPlaceFavouriteService;

    public function __construct(UserPlaceFavouriteService $userPlaceFavouriteService)
    {
        $this->userPlaceFavouriteService = $userPlaceFavouriteService;
    }

    public function like(Place $place)
    {
        $user = Auth::user();
        if($this->authorize('like', $place))
        {
            $placeFavourite = UserPlaceFavourite::firstOrCreate([
                'user_id'   => $user->id,
                'place_id' => $place->id
            ]);
        }
    }

    public function dislike(Place $place)
    {
        $user = Auth::user();
        if ($user->cannot('like', $place)) {
            $placeFavourite = UserPlaceFavourite::firstOrCreate([
                'user_id'   => $user->id,
                'place_id' => $place->id
            ]);
            $placeFavourite->delete();
        }
    }
}
