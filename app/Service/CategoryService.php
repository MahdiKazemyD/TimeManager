<?php

namespace App\Service;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryService
{
    public function __construct(readonly protected CategoryRepositoryInterface $categoryRepository)
    {
    }

    public function store(StoreCategoryRequest $request)
    {
        return $this->categoryRepository->create($request->toArray());
    }

    public function update(UpdateCategoryRequest $request, int $id)
    {
        return $this->categoryRepository->update($id, $request->toArray());
    }

}
