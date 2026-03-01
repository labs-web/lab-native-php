<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('todos');
    }

    public function fetchAll()
    {
        return response()->json(Task::latest()->get());
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|max:255']);
        $task = Task::create(['title' => $request->title, 'completed' => false]);
        return response()->json($task, 201);
    }

    public function update(Request $request, Task $task)
    {
        $task->update(['completed' => $request->completed]);
        return response()->json($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
