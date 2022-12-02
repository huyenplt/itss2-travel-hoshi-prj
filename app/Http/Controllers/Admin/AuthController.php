<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Enums\Role;
use App\Services\Interfaces\UserService;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    public function login () {
        return view('admin.pages.auth.login');
    }

    public function postLogin (LoginRequest $request) {
        $validated = $request->validated();
        $validated['role'] = Role::admin;

        if (Auth::attempt($validated)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->with([
            'error' => 'Email or password not correct',
        ])->onlyInput('email');
    }

    public function logout () {
        Auth::logout();

        return redirect()->route('admin.logout');
    }
}
