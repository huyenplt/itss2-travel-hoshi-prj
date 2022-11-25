<?php

namespace App\Services;

use App\Models\UserBlogVote;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\UserBlogVoteService;

class UserBlogVoteServiceImpl extends BaseServiceImpl implements UserBlogVoteService
{
    public function create(array $data) : UserBlogVote
    {
        return UserBlogVote::create($data);
    }

    public function update(UserBlogVote $userBlogVote, array $data) : bool
    {
        return $userBlogVote->update($data);
    }

    public function remove(array $ids = []) : bool
    {
        return UserBlogVote::whereIn('id', $ids)->delete();
    }
}
