

<?php
include("container/database.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize
    $job_title = mysqli_real_escape_string($conn, $_POST["job_title"]);
    $location = mysqli_real_escape_string($conn, $_POST["location"]);
    $date_posted = mysqli_real_escape_string($conn, $_POST["date_posted"]);
    $expiration_date = mysqli_real_escape_string($conn, $_POST["expiration_date"]);
    $experience = mysqli_real_escape_string($conn, $_POST["experience"]);
    $career_level = mysqli_real_escape_string($conn, $_POST["career_level"]);
    $category = mysqli_real_escape_string($conn, $_POST["category"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $employment_type = mysqli_real_escape_string($conn, $_POST["employment_type"]);
    $salary_range = mysqli_real_escape_string($conn, $_POST["salary_range"]);
    $job_description = mysqli_real_escape_string($conn, $_POST["job_description"]);

    // Insert data into the database
    $sql = "INSERT INTO job_posts (`job_title`, `location` , `date_posted`, `expiration_date`, `experience`, `career_level`, `category`, `gender`, `employment_type`, `salary_range`, `job_description`) 
            VALUES ('$job_title', '$location', '$date_posted', '$expiration_date', '$experience', '$career_level', '$category', '$gender', '$employment_type', '$salary_range', '$job_description')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to a success page
        header("Location: succss-page");
        exit();
    } else {
        // Display an error message
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
