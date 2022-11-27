<?php

namespace App\Services;

use App\Models\UserBlogVote;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\UserBlogVoteService;

class UserBlogVoteServiceImpl extends BaseServiceImpl implements UserBlogVoteService
{
    public function __construct(UserBlogVote $userBlogVote)
    {
        $this->model = $userBlogVote;
    }
}
