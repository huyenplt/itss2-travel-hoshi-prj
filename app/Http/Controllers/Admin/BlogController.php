<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Services\Interfaces\BlogService;
class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index () {
        $blogs = $this->blogService->all();
        return view('admin.pages.blogs.index', compact('blogs'));
    }

    public function delete($id)
    {
        if ($this->blogService->delete($id)) {
            return redirect()->route('admin.blog')->with('success', 'Delete success');
        }

        return back()->with('error', 'Delete failed!');
    }
}
