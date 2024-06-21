<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];

    // Connect to your MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Food";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query
    $sql = "INSERT INTO newsletter (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "OK";  // Respond with 'OK' to trigger the success message
    } else {
        echo "Error: " . $conn->error;  // Provide the specific error
    }

    // Close database connection
    $conn->close();
} else {
    echo "Something went wrong!";
}
?>
