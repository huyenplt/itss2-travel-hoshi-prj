<?php

namespace App\Services\Interfaces;

use App\Models\User;

interface UserService
{
    public function create(array $data) : User; 
}
