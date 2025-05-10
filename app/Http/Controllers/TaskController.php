<?php

/**
 * @OA\Get(
 *     path="/api/tasks",
 *     operationId="getTasks",
 *     tags={"Tasks"},
 *     summary="Получить все задачи",
 *     @OA\Response(
 *         response=200,
 *         description="Список задач",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(ref="#/components/schemas/Task")
 *         )
 *     ),
 * )
 */
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function show($id)
    {
        return Task::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json($task, 200);
    }

    public function destroy($id)
    {
        Task::destroy($id);
        return response()->json(null, 204);
    }
}
