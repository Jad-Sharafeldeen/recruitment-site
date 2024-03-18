<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment website for Jobs in Yemen</title>
</head>
<body>
    <div class="container">
        <h1>Job Search in Yemen</h1>
        <form action="" method="GET">
            <input type="text" name="search" placeholder="Search for a job...">
            <button type="submit">Search</button>
        </form>

        <?php
        include 'db_functions.php';

        // Here I created some sample jobs, we may also create new jobs through posts using wordpress functions
        $jobs = array(
            "Software Engineer",
            "Full-Stack WordPress Web Developer",
            "Data Analyst",
            "Graphic Designer",
            "Project Manager"
        );

        // Filtiring jobs based on key words 
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $search_term = strtolower($_GET['search']);
            $filtered_jobs = array_filter($jobs, function ($job) use ($search_term) {
                return stripos(strtolower($job), $search_term) !== false;
            });
            $jobs = $filtered_jobs;
        }

        // Displaying filtered jobs or all jobs if the search bar is empty after pressing enter or search button 
        foreach ($jobs as $job) {
            echo '<div class="card">';
            echo "<h2>$job</h2>";
            echo '<form method="POST">';
            echo '<input type="hidden" name="job_title" value="' . $job . '">';
            echo '<button type="submit" name="apply">Apply</button>';
            echo '</form>';
            echo '</div>';
        }

        // Handling apply button click
        if (isset($_POST['apply'])) {
            $job_title = $_POST['job_title'];
            $applicant_name = "Jad"; 
            insert_job_application($job_title, $applicant_name);
            echo "<p class='success-message'>Applied successfully for $job_title!</p>";
        }
        ?>
    </div>
</body>
</html>

<?php get_footer(); ?>
