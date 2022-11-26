<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginRequest;
use App\Http\Requests\User\Auth\SignUpRequest;
use App\Services\UserServiceImpl;
use Illuminate\Support\Facades\Auth;
use App\Enums\Role;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserServiceImpl $userService)
    {
        $this->userService = $userService;
    }

    public function auth () {
        return view('user.pages.auth.auth');
    }

    public function login (LoginRequest $request)
    {
        $validated = $request->validated();

        if (Auth::attempt($validated)) {
            return redirect()->route('user.home');
        }

        return back()->with([
            'error' => 'Email or password not correct',
        ])->onlyInput('email');
    }

    public function signUp (SignUpRequest $request)
    {
        $validated = $request->validated();
        $validated['role'] = Role::user;

        if ($this->userService->create($validated)) {
            return back()->with(['success' => 'Register success!'])->onlyInput('email');
        }

        return back()->with(['error' => 'Register failed!'])->onlyInput('email');
    }
}
