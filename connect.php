<?php
$servername = "86.48.5.62";
$username = "root";
$password = "13112005Mv";

$database = "login";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    // Check if the user exists in the database
    $sql = "SELECT * FROM userdata WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        echo "Login successful!";
        header("Location: main.php");
        // You can redirect the user to a different page or perform other actions here
    } else {
        echo "Invalid username or password";
    }
}

// Close the connection
$conn->close();
?>
