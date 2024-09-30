<?php

// Importing necessary classes from the Laravel framework
use Illuminate\Support\Facades\Route; // This is used to define routes for the application
use App\Http\Controllers\TaskController; // Importing the TaskController which will handle task-related actions

// Defining a route for the home page
Route::get('/', function () {
    // When a GET request is made to the root URL ('/'), it returns the 'welcome' view
    return view('welcome');
})->name('home'); // Naming this route 'home' for easy reference later

// Defining a route to show the list of tasks
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
// When a GET request is made to '/tasks', it calls the 'index' method of TaskController to display the tasks
// This route is named 'tasks.index' for easy reference

// Defining a route to store a new task
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
// When a POST request is made to '/tasks', it calls the 'store' method of TaskController
// This is used to add a new task to the list
// This route is named 'tasks.store' for easy reference

// Defining a route to mark a task as complete
Route::patch('/tasks/{id}/complete', [TaskController::class, 'markComplete'])->name('tasks.markComplete');
// When a PATCH request is made to '/tasks/{id}/complete', it calls the 'markComplete' method of TaskController
// The {id} is a placeholder for the task's unique identifier, allowing you to mark that specific task as complete
// This route is named 'tasks.markComplete' for easy reference
