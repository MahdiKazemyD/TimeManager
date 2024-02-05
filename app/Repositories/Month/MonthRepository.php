<?php

namespace App\Repositories\Month;

use App\Models\Month;
use App\Models\Year;
use App\Repositories\BaseRepository;

class MonthRepository extends BaseRepository implements MonthRepositoryInterface
{
    public function __construct(Month $model)
    {
        parent::__construct($model);
    }


}
