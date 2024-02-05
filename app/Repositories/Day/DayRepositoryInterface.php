<?php

namespace App\Repositories\Day;

use App\Repositories\BaseRepositoryInterface;

interface DayRepositoryInterface extends BaseRepositoryInterface
{
    public function allForMonth(int $month);
}
