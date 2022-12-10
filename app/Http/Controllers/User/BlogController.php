<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Blog\BlogRequest;
use App\Services\Interfaces\BlogImageService;
use App\Services\Interfaces\BlogService;
use App\Services\Interfaces\PlaceService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Blog;

class BlogController extends Controller
{
    protected $blogService;
    protected $blogImageService;
    protected $placeService;

    public function __construct(BlogService $blogService, BlogImageService $blogImageService, PlaceService $placeService)
    {
        $this->blogService = $blogService;
        $this->blogImageService = $blogImageService;
        $this->placeService = $placeService;
    }

    public function index()
    {
        $data = $this->blogService->all();
        return view('user.pages.blog.index', compact('data'));
    }

    public function show($id)
    {
        $blog = $this->blogService->find($id);
        $place = $blog->place->name;
        $comments = $blog->userBlogComments;
        return view('user.pages.blog.detail', compact('blog', 'place', 'comments'));
    }

    public function showByPlace($id)
    {
        $place = $this->placeService->find($id);
        $blogs = $place->blogs;
        return view('user.pages.blog.list', compact('place','blogs'));
    }

    public function store(BlogRequest $request)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $blog = $this->blogService->create([
                'user_id' => Auth::user()->id,
                'place_id' => 1,
                'title' => $validated['title'],
                'content' => $validated['content'],
                'season' => $validated['season'],
                'price' => $validated['price'],
                'total_votes' => 0
            ]);

            if ($validated['file_path']) {
                $file_path = Carbon::now()->format('Y_m_d') . '_' . $request->file('file_path')->store('');
                $request->file('file_path')->move(public_path('/assets/images/blog'), $file_path);

                $this->blogImageService->create([
                    'blog_id' => $blog->id,
                    'file_path' => $file_path,
                ]);
            }

            DB::commit();
            return redirect()->route('user.home')->with('success', ' Create new blog success');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
        }

        return back()->with('error', ' create new place failed!');
    }

    public function delete(Blog $blog)
    {
        if ($this->blogService->delete($blog->id)) {
            return redirect()->route('user.blog.index')->with('success', 'Delete success');
        }

        return back()->with('error', 'Delete failed!');
    }

    public function showMyBlogs() {
        $user = Auth::user();
        $blogs = $user->blogs;
        return view('user.pages.blog.my', compact('blogs'));
    }
}
