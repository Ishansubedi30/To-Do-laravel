<h1>To-Do Laravel Project</h1>

    <h2>Clone the Repository</h2>
    <p>To clone the repository, run the following command:</p>
    <pre><code>git clone https://github.com/Ishansubedi30/To-Do-laravel.git</code></pre>

    <h2>After Cloning</h2>
    <p>Navigate to the project directory and run the following commands:</p>
    <pre><code>composer install</code></pre>
    <pre><code>php artisan migrate</code></pre>

    <h3>Troubleshooting</h3>
    <p>If the <code>composer install</code> command fails due to PHP/Laravel version differences, follow these steps:</p>
    <ol>
        <li>Copy the content of the following files from the repository:
            <ul>
                <li>Views</li>
                <li>Migrations</li>
                <li><code>web.php</code></li>
                <li>Models</li>
            </ul>
        </li>
        <li>Paste them into the corresponding files in your created workshop directory and then run the project.</li>
    </ol>

    <h2>Useful Commands</h2>
    <ul>
        <li><strong>Create a Migration:</strong>
            <pre><code>php artisan make:migration create_tasks_table</code></pre>
        </li>
        <li><strong>Create a Controller:</strong>
            <pre><code>php artisan make:controller TaskController</code></pre>
        </li>
        <li><strong>Create a Model:</strong>
            <pre><code>php artisan make:model Task</code></pre>
        </li>
        <li><strong>Run the Project</strong> (ensure XAMPP is running):
            <pre><code>php artisan serve</code></pre>
        </li>
    </ul>

    <h3>Official Laravel Documentation</h3>
    <p>For more details, visit the official Laravel documentation: <a href="https://laravel.com/docs/11.x/readme">Click Here</a></p>
