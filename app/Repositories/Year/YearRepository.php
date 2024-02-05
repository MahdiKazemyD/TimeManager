<?php

namespace App\Repositories\Year;

use App\Models\Year;
use App\Repositories\BaseRepository;

class YearRepository extends BaseRepository implements YearRepositoryInterface
{
    public function __construct(Year $model)
    {
        parent::__construct($model);
    }

    public function allMonthByDay()
    {
        return Year::with('months')->get();
    }

}
