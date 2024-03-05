<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Report\StoreReportRequest;
use App\Http\Requests\Report\UpdateReportRequest;
use App\Repositories\Report\ReportRepositoryInterface;
use App\Service\ReportService;

class ReportController extends Controller
{
    public function __construct(
        readonly protected ReportRepositoryInterface $repository,
        readonly protected ReportService $service
    )
    {
    }

    public function index()
    {
        return $this->repository->allForUser();
    }

    public function store(StoreReportRequest $request)
    {
        //
    }

    public function update(int $id, UpdateReportRequest $request)
    {
        //
    }

    public function destroy(int $id)
    {

    }
}
