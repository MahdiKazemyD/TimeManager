<?php

namespace App\Repositories\Auth;

use App\Repositories\BaseRepositoryInterface;

interface AuthRepositoryInterface extends BaseRepositoryInterface
{
    public function findByEmail($email);
}
