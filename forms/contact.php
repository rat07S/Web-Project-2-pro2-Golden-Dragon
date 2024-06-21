<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Food";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query
    $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "OK";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    echo "Something went wrong!";
}

?>
