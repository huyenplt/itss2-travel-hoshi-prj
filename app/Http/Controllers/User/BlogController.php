<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Blog\BlogRequest;
use App\Services\Interfaces\BlogImageService;
use App\Services\Interfaces\BlogService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Blog;

class BlogController extends Controller
{
    protected $blogService;
    protected $blogImageService;

    public function __construct(BlogService $blogService, BlogImageService $blogImageService)
    {
        $this->blogService = $blogService;
        $this->blogImageService = $blogImageService;
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
        $user = $blog->user->name;
        return view('user.pages.blog.detail', compact('blog','place','user'));
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
}
