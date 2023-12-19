<?php
// Establish database connection (Replace with your connection details)
$host_name = "localhost";
$username = "root";
$password = "";
$dbname = "register_form";

$conn = new mysqli($host_name, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_username = $_POST['email'];
    $entered_password = $_POST['password'];

    $sql = "SELECT email, password FROM users WHERE email = '$entered_username' AND password = '$entered_password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header("Location: register_users.php");


    } else {
        header("Location: index.php");
        // Username not found
        alert("User not found. Please try again.") ;
    }
}

$conn->close();
?>
