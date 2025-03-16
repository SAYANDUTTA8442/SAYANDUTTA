<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "sayandutta"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    // Redirect to the admin page on failure
    header("Location: https://netsuccess.freewebhostmost.com/ayandutta/admin.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and get input data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into the table
    $sql = "INSERT INTO sayandutta_messages (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to success page if data is inserted successfully
        header("Location: http://local.host/sayandutta/");
        echo "Message submitted successfully!";
        exit();
    } else {
        // Redirect to admin page if there is an error
        header("Location: https://netsuccess.freewebhostmost.com/ayandutta/");
        exit();
    }
}

// Close the connection
$conn->close();
?>
