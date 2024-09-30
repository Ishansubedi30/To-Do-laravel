<?php

// Define the namespace for this model, which is App\Models
namespace App\Models;

// Import necessary classes from the Laravel framework
use Illuminate\Database\Eloquent\Factories\HasFactory; // This trait is used for creating model factories
use Illuminate\Database\Eloquent\Model; // This is the base class for all Eloquent models

// Define the Task model class that extends the base Model class
class Task extends Model
{
    // Use the HasFactory trait to enable factory methods for this model
    use HasFactory;

    // Define the attributes that are mass assignable
    protected $fillable = [
        'name',          // The name of the task
        'description',   // A brief description of the task
        'is_completed',  // A boolean indicating whether the task is completed (true/false)
    ];
}
