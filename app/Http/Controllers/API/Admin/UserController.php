<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    public function __construct(
        readonly protected UserRepositoryInterface $userRepository,
    )
    {
    }

    public function index()
    {
        return $this->userRepository->allWithPaginate(100);
    }

}
