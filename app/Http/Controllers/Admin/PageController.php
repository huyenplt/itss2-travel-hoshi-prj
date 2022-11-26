<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;

class PageController extends Controller
{
    public function dashboard () {
        $places = Place::all();

        return view('admin.dashboard', compact('places'));
    }

    public function user () {
        return view('admin.pages.users');
    }

    public function blog () {
        return view('admin.pages.blogs');
    }
}
