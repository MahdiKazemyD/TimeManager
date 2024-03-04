<?php

namespace App\Service;

use App\Http\Requests\Task\StoreTaskRequest;
use App\Http\Requests\Task\UpdateTaskRequest;
use App\Repositories\Task\TaskRepositoryInterface;

class TaskService
{
    public function __construct(readonly protected TaskRepositoryInterface $taskRepository)
    {
    }

    public function store(StoreTaskRequest $request)
    {
        return $this->taskRepository->create($request->toArray());
    }

    public function update(int $id, UpdateTaskRequest $request)
    {
        return $this->taskRepository->update($id, $request->toArray());
    }
}
