<?php

namespace App\Http\Controllers\Admin;
use App\Models\Place;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index () {
        $places = Place::all();

        return view('admin.pages.dashboard.index', compact('places'));
    }
}
