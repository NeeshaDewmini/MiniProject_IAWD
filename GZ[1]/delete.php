<?php   
 include 'registration.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `members` WHERE id = '$id'";  
      $run = mysqli_query($connect,$query);  
      if ($run) {  
           header('location:Admin.php');  
      }else{  
           echo "Error: ".mysqli_error($connect);  
      }  
 }  
 ?> 