<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', ['tasks' => $tasks]);
    }

    // Add a new task
    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create($validatedData);

        return redirect()->route('tasks.index');
    }

    // Mark a task as completed
    public function markComplete($id)
    {
        $task = Task::findOrFail($id);
        $task->is_completed = true;
        $task->save();

        return redirect()->route('tasks.index');
    }
}
