<?php
// database.php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "sportweb";

// Create connection
$connect = mysqli_connect($servername,$username,$password,$dbname);

if (!$connect){
    die('connection Failed:'. mysqli_connect_error());
}
?>




