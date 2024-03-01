<?php

namespace App\Service;

use App\Http\Requests\Target\StoreTargetRequest;
use App\Http\Requests\Target\UpdateTargetRequest;
use App\Repositories\Target\TargetRepositoryInterface;

class TargetService
{
    public function __construct(readonly protected TargetRepositoryInterface $targetRepository)
    {
    }

    public function store(StoreTargetRequest $request)
    {
        return $this->targetRepository->create($request->toArray());
    }

    public function update(int $id, UpdateTargetRequest $request)
    {
        return $this->targetRepository->update($id, $request->toArray());
    }

}
