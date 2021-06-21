<?php

namespace App\Domain\Repositories;

use App\Domain\Models\TaskEntity;

interface TaskRepository
{
    public function createTask(TaskEntity $task): TaskEntity;
}
