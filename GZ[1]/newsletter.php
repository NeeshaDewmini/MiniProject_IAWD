<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'gamezone';

    // Create connection
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO newsletter(email) values ('$email')"
    mysqli_query($conn,$sql);
}
?>