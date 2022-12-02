<?php

namespace App\Services\Interfaces;

use App\Models\User;

interface UserService extends BaseService
{
    public function create(array $data) : User; 
}
