<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Comment\CreateCommentRequest;
use App\Models\Blog;
use App\Services\Interfaces\UserBlogCommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $userBlogCommentService;

    public function __construct(UserBlogCommentService $userBlogCommentService)
    {
        $this->userBlogCommentService = $userBlogCommentService;
    }

    public function store(CreateCommentRequest $request, Blog $blog)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $blog->userBlogComments()->create([
                'user_id' => Auth::user()->id,
                'blog_id' => $blog->id,
                'comment' => $validated['comment'],
            ]);
            return redirect()->route('user.blog.detail', $blog->id);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
        }
    }
}
