<?php

namespace App\Services;

use App\Models\User;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\UserService;

class UserServiceImpl extends BaseServiceImpl implements UserService
{
    public function create(array $data) : User
    {
        return User::create($data);
    }

    public function update(User $user, array $data) : bool
    {
        return $user->update($data);
    }

    public function remove(array $ids = []) : bool
    {
        return User::whereIn('id', $ids)->delete();
    }
}
