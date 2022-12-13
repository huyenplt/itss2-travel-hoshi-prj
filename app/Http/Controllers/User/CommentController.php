<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Comment\CreateCommentRequest;
use App\Services\Interfaces\UserBlogCommentService;
use App\Models\UserBlogComment;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    protected $userBlogCommentService;

    public function __construct(UserBlogCommentService $userBlogCommentService)
    {
        $this->userBlogCommentService = $userBlogCommentService;
    }

    public function store(CreateCommentRequest $request)
    {
        $validated = $request->validated();

        $data = [
            'user_id' => Auth::user()->id,
            'blog_id' => $validated['blog_id'],
            'comment' => $validated['comment'],
        ];

        if ($this->userBlogCommentService->create($data)) {
            return back()->with('sucess', 'Create comment success');
        }

        return back()->with('errors', 'Create comment failed!');
    }

    public function delete(UserBlogComment $comment)
    {
        if ($this->authorize('delete', $comment)) {
            if ($this->userBlogCommentService->delete($comment->id)) {
                return back()->with('success', 'Delete success');
            }
            return back()->with('error', 'Delete failed!');
        } else abort(403);
    }
}
