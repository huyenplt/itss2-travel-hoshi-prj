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
use Illuminate\Support\Str;

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
                'place_id' => $validated['place_id'],
                'title' => $validated['title'],
                'content' => $validated['content'],
                'season' => $validated['season'],
                'price' => $validated['price'],
                'total_votes' => 0
            ]);

            if ($file = $request->file('file_path')) {
                $file_path = Carbon::now()->format('Y_m_d') . '_' . $file->store('');
                $url = "assets/images/blog/" . Str::slug($validated['title']);
                $file->move(public_path($url), $file_path);

                $blog->blogImages()->create([
                    'file_path' => $url . '/' . $file_path,
                ]);
            }

            DB::commit();
            return back()->with('success', ' Create new blog success');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
        }

        return back()->with('error', ' create new blog failed!');
    }

    public function delete(Blog $blog)
    {
        if (Auth::user()->can('delete', $blog)) {
            if ($this->blogService->delete($blog->id)) {
                return redirect()->route('user.blog.index')->with('success', 'Delete success');
            }
            return back()->with('error', 'Delete failed!');
        } else abort(403);
    }

    public function showMyBlogs() {
        $user = Auth::user();
        $blogs = $user->blogs;
        return view('user.pages.blog.my', compact('blogs'));
    }
}
