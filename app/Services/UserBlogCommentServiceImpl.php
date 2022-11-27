<?php

namespace App\Services;

use App\Models\UserBlogComment;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\UserBlogCommentService;

class UserBlogCommentServiceImpl extends BaseServiceImpl implements UserBlogCommentService
{
    public function __construct(UserBlogComment $userBlogComment)
    {
        $this->model = $userBlogComment;
    }
}
