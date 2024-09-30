<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display a list of all tasks
    public function index()
    {
        // Retrieve all tasks from the database
        $tasks = Task::all();
        // Pass the tasks to the 'index' view for rendering
        return view('index', ['tasks' => $tasks]);
    }

    // Add a new task to the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            // 'name' is required and must be a string with a maximum length of 255 characters
            'name' => 'required|string|max:255',
            // 'description' is optional and can be a string
            'description' => 'nullable|string',
        ]);

        // Create a new task using the validated data
        Task::create($validatedData);

        // Redirect to the tasks index page after creating the task
        return redirect()->route('tasks.index');
    }

    // Mark a specific task as completed
    public function markComplete($id)
    {
        // Find the task by its ID; if not found, it will throw a 404 error
        $task = Task::findOrFail($id);
        
        // Set the 'is_completed' attribute to true
        $task->is_completed = true;
        // Save the changes to the database
        $task->save();

        // Redirect back to the tasks index page after marking the task as completed
        return redirect()->route('tasks.index');
    }
}
