


<?php 

include("container/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $ipAddress = $_POST["ipAddress"];
    $country = $_POST['country'];
    
    // Validate the data if needed

    // Insert data into the database
    $sql = "INSERT INTO  `contact-form` 
    (`name`, `email`, `phone`, `subject`, `message`, `ipAddress`, `country`) 
    VALUES 
    ('$name', '$email', '$phone' ,'$subject' ,'$message' , '$ipAddress' , '$country')";

    if (mysqli_query($conn, $sql)) {

        header("Location: succss-page");
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection if needed
    mysqli_close($conn);
}
?>