<?php
include_once 'feedback.php';


$email = $_POST['email'];
$feedback = $_POST['fdback'];


$stmt = "INSERT INTO feedbacks(email,feedback)
VALUES('$email','$feedback');";

$rslt= mysqli_query($connect, $stmt);

header("Location:contactUs.html? success !");

