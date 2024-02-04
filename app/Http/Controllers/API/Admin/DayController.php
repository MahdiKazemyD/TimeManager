<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Day\StoreDayRequest;
use App\Http\Requests\Day\UpdateDayRequest;
use App\Repositories\Day\DayRepositoryInterface;
use App\Service\DayService;
use Illuminate\Http\Request;

class DayController extends Controller
{

    public function __construct(
        readonly protected DayRepositoryInterface $dayRepository,
        readonly protected DayService $dayService
    )
    {
    }

    public function index()
    {
        return $this->dayRepository->allForUser();
    }

    public function store(StoreDayRequest $request)
    {
        return $this->dayService->store($request);
    }

    public function update(int $id,UpdateDayRequest $request)
    {
        return $this->dayService->update($id, $request);
    }

    public function destroy(int $id)
    {
        return $this->dayRepository->delete($id);
    }
}
