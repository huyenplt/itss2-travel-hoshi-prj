<?php

namespace App\Services\Interfaces;

use App\Models\UserBlogComment;

interface UserBlogCommentService
{
    public function create(array $data) : UserBlogComment;
    public function update(UserBlogComment $userBlogComment, array $data) : bool;
    public function remove(array $ids = []) : bool;
}
