<?php

// Import necessary classes from the Laravel framework
use Illuminate\Database\Migrations\Migration; // This class is used to create and manage database migrations
use Illuminate\Database\Schema\Blueprint; // This class is used to define the structure of the database tables
use Illuminate\Support\Facades\Schema; // This facade provides a way to interact with the database schema

// Define an anonymous class that extends the Migration class
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This method is called when the migration is executed.
     */
    public function up(): void
    {
        // Create the 'tasks' table
        Schema::create('tasks', function (Blueprint $table) {
            // Create an auto-incrementing primary key column named 'id'
            $table->id();
            
            // Create a string column named 'name' to store the name of the task
            $table->string('name');
            
            // Create a nullable string column named 'description' for the task's description
            $table->string('description')->nullable();
            
            // Create a boolean column named 'is_completed' to track the task's completion status
            // Set the default value to false, meaning the task is not completed by default
            $table->boolean('is_completed')->default(false);
            
            // Create the 'created_at' and 'updated_at' timestamp columns
            // These columns automatically store the creation and update times of the record
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * This method is called when the migration is rolled back.
     */
    public function down(): void
    {
        // Drop the 'tasks' table if it exists
        Schema::dropIfExists('tasks');
    }
};
