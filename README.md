<h2>Clone the repository: </h2>

<li>Copy code<br>
<pre><code>https://github.com/Ishansubedi30/To-Do-laravel.git</code></pre></li>

<h2>After cloaning, please go in project directory and run following commands</h2>
<pre><code>composer install</code></pre>
<pre><code>php artisan migrate</code></pre>

<h3>If above composer command fails, you have different version of PHP/Laravel, so follow following steps</h3>
<li>Copy the content of views,migration, web.php and models to the files in that you created in workshop and then run the project</li>


<h2>Useful Code </h2>
    <ul>
        <li>Make migration</li>
        <pre><code>php artisan make:migration create_tasks_table </code></pre>

        <li>Make controller</li>
        <pre><code>php artisan make:controller TaskController</code></pre>

        <li>Make Model</li>
        <pre><code>php artisan make:model Task</code></pre>

        <li>Run Project (make sure xaamp is running)</li>
        <pre><code>php artisan serve</code></pre>
    </ul>

<h3> To fo to Official Laravel Documentation : <a href="https://laravel.com/docs/11.x/readme">Click Here</a></h3>