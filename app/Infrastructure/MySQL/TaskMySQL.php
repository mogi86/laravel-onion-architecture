<?php

namespace App\Infrastructure\MySQL;

use App\Domain\Models\TaskEntity;
use App\Domain\Repositories\TaskRepository;
use Illuminate\Support\Facades\Log;

class TaskMySQL implements TaskRepository
{
    public function createTask(TaskEntity $task): TaskEntity
    {
        Log::info("create task via MySQL: " . $task->toString());
        return $task;
    }
}
