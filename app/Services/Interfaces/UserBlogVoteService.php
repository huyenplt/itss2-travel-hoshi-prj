<?php

namespace App\Services\Interfaces;

use App\Models\UserBlogVote;

interface UserBlogVoteService
{
    public function create(array $data) : UserBlogVote;
    public function update(UserBlogVote $userBlogVote, array $data) : bool;
    public function remove(array $ids = []) : bool;
}
