<?php

namespace App\Repositories\Report;

use App\Models\Report;
use App\Repositories\BaseRepository;
use App\Repositories\BaseRepositoryInterface;

class ReportRepository extends BaseRepository implements BaseRepositoryInterface
{
    public function __construct(Report $model)
    {
        parent::__construct($model);
    }
}
