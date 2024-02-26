<?php

namespace App\Service;

use App\Http\Requests\Gift\StoreGiftRequest;
use App\Http\Requests\Gift\UpdateGiftRequest;
use App\Repositories\Gift\GiftRepositoryInterface;

class GiftService
{
    public function __construct(readonly protected GiftRepositoryInterface $giftRepository)
    {
    }

    public function store(StoreGiftRequest $request)
    {
        return $this->giftRepository->create($request->toArray());
    }

    public function update(int $id, UpdateGiftRequest $request)
    {
        return $this->giftRepository->update($id, $request->toArray());
    }
}
