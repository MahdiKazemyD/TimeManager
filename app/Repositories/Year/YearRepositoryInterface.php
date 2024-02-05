<?php

namespace App\Repositories\Year;

use App\Repositories\BaseRepositoryInterface;

interface YearRepositoryInterface extends BaseRepositoryInterface
{
    public function allMonthByDay();
}
