<?php
include_once 'registration.php';

// Process form submission
 
    $fn = $_POST['fn'];
    $birthday = $_POST['birthday'];
    $age = $_POST['age'];
    $nic = $_POST['nic'];
    $contact = $_POST['contact'];
    $whatsapp = $_POST['whatsapp'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    
    // Get selected sports
    $sports = isset($_POST['sports']) && is_array($_POST['sports'])? implode(", ", $_POST['sports']) : '';

    // Prepare and bind
    $stmt ="INSERT INTO members (full_name, birthday, age, nic, contact, whatsapp, address, gender, sports)
    VALUES ('$fn', '$birthday', '$age', '$nic', '$contact', '$whatsapp', '$address', '$gender', '$sports');";
    
    $rslt = mysqli_query($connect, $stmt);


    header("Location:Register.php?success !");
  
    $stmt= "SELECT * FROM member;";
    $rslt = mysqli_query($connect, $stmt);
    echo $rslt;
    
    header("Location:Register.php?success !");

