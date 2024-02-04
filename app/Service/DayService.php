<?php

namespace App\Service;

use App\Http\Requests\Day\StoreDayRequest;
use App\Http\Requests\Day\UpdateDayRequest;
use App\Repositories\Day\DayRepositoryInterface;

class DayService
{
    public function __construct(readonly protected DayRepositoryInterface $dayRepository)
    {
    }

    public function store(StoreDayRequest $request)
    {
        return $this->dayRepository->create($request->toArray());
    }

    public function update(int $id, UpdateDayRequest $request)
    {
        return $this->dayRepository->update($id, $request->toArray());
    }
}
