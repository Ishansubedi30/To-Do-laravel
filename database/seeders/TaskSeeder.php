<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert multiple tasks into the 'tasks' table
        Task::create([
            'name' => 'Buy Groceries',
            'description' => 'Buy vegetables, fruits, and milk',
            'is_completed' => false,
        ]);

        Task::create([
            'name' => 'Finish Project',
            'description' => 'Complete the pending Laravel project',
            'is_completed' => false,
        ]);

        Task::create([
            'name' => 'Workout',
            'description' => 'Go for a 30-minute jog in the morning',
            'is_completed' => true,
        ]);
    }
}
