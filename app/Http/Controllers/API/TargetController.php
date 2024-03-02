<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slogan\StoreSloganRequest;
use App\Http\Requests\Slogan\UpdateSloganRequest;
use App\Http\Requests\Target\StoreTargetRequest;
use App\Http\Requests\Target\UpdateTargetRequest;
use App\Repositories\Target\TargetRepositoryInterface;
use App\Service\TargetService;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function __construct(
        readonly protected TargetRepositoryInterface $targetRepository,
        readonly protected TargetService $targetService
    )
    {
    }

    public function index()
    {
        return $this->targetRepository->allForUser();
    }

    public function store(StoreTargetRequest $request)
    {
        return $this->targetService->store($request);
    }

    public function update(int $id , UpdateTargetRequest $request)
    {
        return $this->targetService->update($id, $request);
    }

    public function destroy(int $id)
    {
        return $this->targetRepository->delete($id);
    }
}
