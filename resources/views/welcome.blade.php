<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tag to define the character encoding of the document -->
    <meta charset="UTF-8">
    
    <!-- Meta tag for responsive design, ensuring the page scales correctly on different devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- The title that will appear in the browser tab -->
    <title>To-Do App</title>
    
    <!-- Linking the external CSS file to style the HTML page. 'asset' is a Laravel helper to get the path of the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Main container that will hold the content. This is used to center the content on the page -->
    <div class="home-container">
        
        <!-- Inner content box where the text and button are placed -->
        <div class="home-div">
            
            <!-- Main heading of the page -->
            <h1>Welcome to My To-Do APP</h1>
            
            <!-- A short description of the app -->
            <p>Your productivity partner!</p>
            
            <!-- A button styled as a link that navigates to the tasks page (using a Laravel route) when clicked -->
            <a href="{{ route('tasks.index') }}" class="start-button">Get Started</a>
        </div>
        
    </div>
</body>
</html>
