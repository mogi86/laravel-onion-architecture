<?php

namespace App\Infrastructure\ExternalAPI;

use App\Domain\Models\TaskEntity;
use App\Domain\Repositories\TaskRepository;
use Illuminate\Support\Facades\Log;

class TaskExternalAPI implements TaskRepository
{
    public function createTask(TaskEntity $task): TaskEntity
    {
        Log::info("create task via External API: " . $task->toString());
        return $task;
    }
}
