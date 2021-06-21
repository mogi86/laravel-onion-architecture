<?php


namespace App\Presentation\Controllers;


use App\Application\UseCases\TaskUseCase;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private TaskUseCase $taskUseCase;

    public function __construct(
        TaskUseCase $taskUseCase
    )
    {
        $this->taskUseCase = $taskUseCase;
    }

    public function create(Request $request)
    {
        $task = $this->taskUseCase->createTask($request->name, $request->description);
        $response = [
            'id' => $task->id(),
            'name' => $task->name(),
            'description' => $task->description(),
        ];

        return response()->json($response);
    }
}
