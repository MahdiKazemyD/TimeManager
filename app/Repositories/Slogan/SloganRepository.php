<?php

namespace App\Repositories\Slogan;

use App\Models\Slogan;
use App\Repositories\BaseRepository;

class SloganRepository extends BaseRepository implements SloganRepositoryInterface
{
    public function __construct(Slogan $model)
    {
        parent::__construct($model);
    }
}
