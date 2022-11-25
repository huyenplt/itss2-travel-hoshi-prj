<?php

namespace App\Services\Interfaces;

use App\Models\User;

interface UserService
{
    public function create(array $data) : User;
    public function update(User $user, array $data) : bool;
    public function remove(array $ids = []) : bool;
}
