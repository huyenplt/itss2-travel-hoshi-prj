<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Services\Interfaces\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index () {
        $users = $this->userService->all();
        return view('admin.pages.users.index', compact('users'));
    }

    public function delete($id) {
        if ($this->blogService->delete($id)) {
            return redirect()->route('admin.user.index')->with('success', 'Delete success');
        }

        return back()->with('error', 'Delete failed!');
    }
}
