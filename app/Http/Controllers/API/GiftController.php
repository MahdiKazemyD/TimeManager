<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Gift\StoreGiftRequest;
use App\Http\Requests\Gift\UpdateGiftRequest;
use App\Models\Gift;
use App\Repositories\Gift\GiftRepositoryInterface;
use App\Service\GiftService;

class GiftController extends Controller
{
    public function __construct(
        readonly protected GiftRepositoryInterface $giftRepository,
        readonly protected GiftService $giftService
    )
    {
    }

    public function getGiftStatusAvailable()
    {
        return $this->giftRepository->getGiftStatusAvailable();
    }

    public function store(StoreGiftRequest $request)
    {
        return $this->giftService->store($request);
    }

    public function update(int $id, UpdateGiftRequest $request)
    {
        return $this->giftService->update($id, $request);
    }

    public function destroy(int $id)
    {
        return $this->giftRepository->delete($id);
    }
}
