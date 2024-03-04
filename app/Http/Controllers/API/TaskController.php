<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreTaskRequest;
use App\Http\Requests\Task\UpdateTaskRequest;
use App\Repositories\Task\TaskRepositoryInterface;
use App\Service\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(
        readonly protected TaskRepositoryInterface $taskRepository,
        readonly protected TaskService $taskService
    )
    {
    }

    public function index()
    {
        return $this->taskRepository->allForUser();
    }

    public function store(StoreTaskRequest $request)
    {
        return $this->taskService->store($request);
    }
    public function update(int $id, UpdateTaskRequest $request)
    {
        return $this->taskService->update($id, $request);
    }

    public function destroy(int $id)
    {
        return $this->taskRepository->delete($id);
    }
}
