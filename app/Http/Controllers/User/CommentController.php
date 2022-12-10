<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Comment\CreateCommentRequest;
use App\Services\Interfaces\UserBlogCommentService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
}
