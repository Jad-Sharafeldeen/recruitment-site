<?php
// DB connection function
function get_db_connection() {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "local";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

// insert job application into database
function insert_job_application($job_title, $applicant_name) {
    $conn = get_db_connection();

    $stmt = $conn->prepare("INSERT INTO job_applications (job_title, applicant_name) VALUES (?, ?)");
    $stmt->bind_param("ss", $job_title, $applicant_name);

    $stmt->execute();

    $stmt->close();
    $conn->close();
}
?>
