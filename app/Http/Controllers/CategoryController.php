<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Service\CategoryService;

class CategoryController extends Controller
{
    public function __construct(
        readonly protected CategoryRepositoryInterface $categoryRepository,
        readonly protected CategoryService $categoryService,
    )
    {
    }

    public function index()
    {
        return $this->categoryRepository->all();
    }

    public function store(StoreCategoryRequest $request)
    {
        return $this->categoryService->store($request);
    }

    public function update(UpdateCategoryRequest $request, int $id)
    {
        return $this->categoryService->update($request, $id);
    }

    public function destroy(int $id)
    {
        return $this->categoryRepository->delete($id);
    }
}
