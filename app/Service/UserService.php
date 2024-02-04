<?php

namespace App\Service;

use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function __construct(readonly protected UserRepositoryInterface $userRepository)
    {
    }

}
