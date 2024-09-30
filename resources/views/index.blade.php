<!DOCTYPE html>
<html lang="en">
<head>
    <!-- This declares the document as HTML5 and sets the language to English -->
    <meta charset="UTF-8">
    <!-- This meta tag ensures the page is responsive and adjusts to different screen sizes, especially mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- This is the title of the web page, which appears in the browser tab -->
    <title>Tasks List</title>
    
    <!-- This links the external CSS file to style the page. It uses Laravel's asset function to point to the correct file location -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Main container that wraps all the content inside the body. The class "task-container" is used to apply specific styles from the CSS file -->
    <div class="container task-container">
        <!-- Main heading of the page -->
        <h1>Tasks</h1>

        <!-- Form to Add a New Task -->
        <!-- The "action" attribute defines where the form data is sent after submission. In this case, it's sending the data to the route 'tasks.store' -->
        <!-- The method "POST" is used to send the form data to the server securely -->
        <!-- The "task-form" class is used to apply specific styles to the form elements -->
        <form action="{{ route('tasks.store') }}" method="POST" class="task-form">
            <!-- This is a Laravel directive to include a hidden CSRF token, which helps protect the form from cross-site request forgery attacks -->
            @csrf
            <!-- Input field for entering the task name. "name" attribute is used to send this data to the server -->
            <!-- The "required" attribute ensures that the user cannot submit the form without filling this field -->
            <input type="text" name="name" placeholder="Task name" required>
            
            <!-- Input field for entering an optional task description -->
            <input type="text" name="description" placeholder="Task description">
            
            <!-- A button to submit the form. The "btn" class is used to apply specific styles -->
            <button type="submit" class="btn">Add Task</button>
        </form>

        <!-- Unordered list to display the tasks -->
        <!-- The "task-list" class is used to apply specific styles to the list -->
        <ul class="task-list">
            <!-- Loop through all the tasks (provided by Laravel's $tasks variable) and display each one as a list item -->
            @foreach ($tasks as $task)
                <!-- Each task is wrapped in a list item. The "task-item" class applies styles to each task -->
                <li class="task-item">
                    <!-- Display the task name and its description inside a span element -->
                    <span>{{ $task->name }} : {{ $task->description }}</span>

                    <!-- Check if the task is not completed. If true, display the button to mark it as completed -->
                    @if (!$task->is_completed)
                        <!-- Form to mark a task as completed -->
                        <!-- The "action" points to a route that updates the status of the task -->
                        <!-- The method is PATCH, which indicates that we are updating the task, not creating a new one -->
                        <form action="{{ route('tasks.markComplete', $task->id) }}" method="POST" style="display:inline;">
                            <!-- Include the CSRF token for security -->
                            @csrf
                            <!-- Method PATCH tells Laravel this is an update action -->
                            @method('PATCH')
                            <!-- A button to mark the task as done. The "complete-btn" class adds specific styles -->
                            <button type="submit" class="btn complete-btn">Mark as Done</button>
                        </form>
                    @else
                        <!-- If the task is already completed, show this text instead of the button -->
                        <span class="completed">(Completed)</span>
                    @endif
                </li>
            @endforeach
        </ul>
        <a href="{{ route('home') }}" class="task-form">Home</a>
    </div>
</body>
</html>
