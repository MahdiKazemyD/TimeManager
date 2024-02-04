<?php

namespace App\Repositories\Auth;

use App\Models\User;
use App\Repositories\BaseRepository;

class AuthRepository extends BaseRepository implements AuthRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function findByEmail($email)
    {
        return $this->model->where('email', $email)->get();
    }
}
