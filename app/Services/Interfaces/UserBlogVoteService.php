<?php

namespace App\Services\Interfaces;

use App\Services\Interfaces\BaseService;

interface UserBlogVoteService extends BaseService
{
    public function getBlogVote($blog_id, $user_id);
    public function getRatingBlog($blog_id);
}
