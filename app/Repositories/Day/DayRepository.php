<?php

namespace App\Repositories\Day;

use App\Models\Day;
use App\Repositories\BaseRepository;

class DayRepository extends BaseRepository implements DayRepositoryInterface
{
    public function __construct(Day $model)
    {
        parent::__construct($model);
    }

    public function allForMonth(int $month)
    {
        //
    }
}
