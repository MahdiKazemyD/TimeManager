<?php

namespace App\Repositories\Gift;

use App\Models\Gift;
use App\Repositories\BaseRepository;

class GiftRepository extends BaseRepository implements GiftRepositoryInterface
{
    public function __construct(Gift $model)
    {
        parent::__construct($model);
    }
}
