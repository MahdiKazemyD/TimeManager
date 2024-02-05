<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function userBlock(int $id)
    {
        return User::query()->find($id)->update([
            'isBlocked' => 0
        ]);
    }
}
