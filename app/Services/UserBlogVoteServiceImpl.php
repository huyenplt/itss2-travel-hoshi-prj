<?php

namespace App\Services;

use App\Models\UserBlogVote;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\UserBlogVoteService;
use Illuminate\Support\Facades\DB;

class UserBlogVoteServiceImpl extends BaseServiceImpl implements UserBlogVoteService
{
    public function __construct(UserBlogVote $userBlogVote)
    {
        $this->model = $userBlogVote;
    }

    public function getBlogVote($blog_id, $user_id) {
        return $this->model->where('user_id', $user_id)
            ->where('blog_id', $blog_id)
            ->first();
    }

    public function getRatingBlog($blog_id) {
        $rating_blog = $this->model->select(DB::raw('round(AVG(vote), 1) as rating'))
            ->where('blog_id', $blog_id)
            ->groupBy('blog_id')
            ->first();

        if ($rating_blog) {
            return $rating_blog->rating;
        }

        return 0;
    }
}
