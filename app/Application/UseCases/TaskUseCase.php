<?php

namespace App\Application\UseCases;

use App\Domain\Models\TaskEntity;
use App\Domain\Repositories\TaskRepository;

class TaskUseCase
{
    private TaskRepository $taskRepository;

    public function __construct(
        TaskRepository $taskRepository
    )
    {
        $this->taskRepository = $taskRepository;
    }

    public function createTask(string $name, string $description): TaskEntity
    {
        $task = new TaskEntity($name, $description);
        return $this->taskRepository->createTask($task);
    }
}
