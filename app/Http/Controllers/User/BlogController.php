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
use App\Services\Interfaces\UserBlogVoteService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    protected $blogService;
    protected $blogImageService;
    protected $placeService;
    protected $userBlogVote;

    public function __construct(BlogService $blogService, BlogImageService $blogImageService, PlaceService $placeService, UserBlogVoteService $userBlogVote)
    {
        $this->blogService = $blogService;
        $this->blogImageService = $blogImageService;
        $this->placeService = $placeService;
        $this->userBlogVote = $userBlogVote;
    }

    public function index()
    {
        $data = $this->blogService->all();
        return view('user.pages.blog.index', compact('data'));
    }

    public function show($id = null)
    {
        $blog = $this->blogService->find($id);
        $place = $blog->place->name;
        $comments = $blog->userBlogComments;
        $userBlogVote = $this->userBlogVote->getBlogVote($id, Auth::user()->id);
        $rating = $this->userBlogVote->getRatingBlog($id);
        return view('user.pages.blog.detail', compact('blog', 'place', 'comments', 'userBlogVote', 'rating'));
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
        if ($this->authorize('delete', $blog)) {
            if ($this->blogService->delete($blog->id)) {
                return redirect()->route('user.place.index')->with('success', 'Delete success');
            }
            return back()->with('error', 'Delete failed!');
        } else abort(403);

    }

    public function showMyBlogs() {
        $user = Auth::user();
        $blogs = $user->blogs;
        return view('user.pages.blog.my', compact('blogs'));
    }

    public function vote(Request $request) {
        if ($request->ajax()) {
            $userBlogVote = $this->userBlogVote->getBlogVote($request->blog_id, Auth::user()->id);
            $data = [
                'vote' => $request->vote
            ];

            if ($userBlogVote) {
                if ($userBlogVote->update($data)) {
                    return response()->json([
                        'message' => 'Update vote thành công'
                    ]);
                }
            } else {
                $data['blog_id'] = $request->blog_id;
                $data['user_id'] = Auth::user()->id;
                if ($this->userBlogVote->create($data)) {
                    return response()->json([
                        'message' => 'Vote thành công'
                    ]);
                }
            }

            return response()->json([
                'message' => 'Vote thất bại'
            ]);
        }

        return response()->json([
            'message' => 'Không hỗ trợ method này'
        ]);
    }
}
