<?php
// Database connection parameters
$servername = "localhost"; // Your server address
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "sportweb"; // The database we created earlier

// Create connection to the database
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (mysqli_connect_errno()) {
    die('Connection failed: ' . mysqli_connect_error());
}
mysqli_set_charset($connect, "utf8");

?>
