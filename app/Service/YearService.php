<?php

namespace App\Service;

use App\Http\Requests\Year\StoreYearRequest;
use App\Http\Requests\Year\UpdateYearRequest;
use App\Repositories\Year\YearRepositoryInterface;

class YearService
{
    public function __construct(readonly protected YearRepositoryInterface $yearRepository)
    {
    }

    public function store(StoreYearRequest $request)
    {
        return $this->yearRepository->create($request->toArray());
    }

    public function update(int $id, UpdateYearRequest $request)
    {
        return $this->yearRepository->update($id, $request->toArray());
    }
}
