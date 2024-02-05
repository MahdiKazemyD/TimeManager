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
        return $this->userRepository->allWithChildren();
    }

    public function block(int $id)
    {
        return $this->userRepository->userBlock($id);
    }

    public function destroy(int $id)
    {
        return $this->userRepository->delete($id);
    }

}
