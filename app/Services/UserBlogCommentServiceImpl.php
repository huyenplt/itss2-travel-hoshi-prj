<?php

namespace App\Services;

use App\Models\UserBlogComment;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\UserBlogCommentService;

class UserBlogCommentServiceImpl extends BaseServiceImpl implements UserBlogCommentService
{
    public function create(array $data) : UserBlogComment
    {
        return UserBlogComment::create($data);
    }

    public function update(UserBlogComment $userBlogComment, array $data) : bool
    {
        return $userBlogComment->update($data);
    }

    public function remove(array $ids = []) : bool
    {
        return UserBlogComment::whereIn('id', $ids)->delete();
    }
}
