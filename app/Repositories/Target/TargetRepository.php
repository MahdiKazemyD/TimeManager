<?php

namespace App\Repositories\Target;

use App\Models\Target;
use App\Repositories\BaseRepository;

class TargetRepository extends BaseRepository implements TargetRepositoryInterface
{
    public function __construct(Target $model)
    {
        parent::__construct($model);
    }

}
