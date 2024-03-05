<?php

namespace App\Service;

use App\Http\Requests\Report\StoreReportRequest;
use App\Http\Requests\Report\UpdateReportRequest;
use App\Repositories\Report\ReportRepositoryInterface;

class ReportService
{
    public function __construct(readonly protected ReportRepositoryInterface $repository)
    {
    }

    public function store(StoreReportRequest $request)
    {
        return $this->repository->create($request->toArray());
    }

    public function update(int $id, UpdateReportRequest $request)
    {
        return $this->repository->update($id, $request->toArray());
    }

}
