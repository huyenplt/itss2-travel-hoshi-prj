<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginRequest;
use App\Http\Requests\User\Auth\SignUpRequest;
use App\Services\UserServiceImpl;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $userService;
    
    public function __construct(UserServiceImpl $userService)
    {
        $this->userService = $userService;
    }
    
    public function userAuth () {
        return view('user.pages.auth.auth');
    }

    public function userLogin (LoginRequest $request) 
    {
        $validated = $request->validated();

        if (Auth::attempt($validated)) {
            return redirect()->route('home');
        }
 
        return back()->with([
            'error' => 'Email or password not correct',
        ])->onlyInput('email');
    }

    public function userSignUp (SignUpRequest $request) 
    {
        $validated = $request->validated();
        $validated['role'] = 0;

        if ($this->userService->create($validated)) {
            return back()->with(['success' => 'Register success!'])->onlyInput('email');
        }
 
        return back()->with(['error' => 'Register failed!'])->onlyInput('email');
    }
}
