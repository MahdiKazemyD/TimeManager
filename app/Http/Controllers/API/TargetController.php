<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Target\StoreTargetRequest;
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

    public function show( $slogan)
    {
        //
    }

    public function edit( $slogan)
    {
        //
    }

    public function update( $request,  $slogan)
    {
        //
    }

    public function destroy( $slogan)
    {
        //
    }
}
