
<?php

function deleteAdmin($id){

global $conn;

$query = "DELETE FROM newsletter WHERE id = '$id'";
$stmt = $conn->prepare($query);

if($stmt->execute()){
    header("Location: index.php");
}

}


//update query
// if(isset($_POST['update'])){

//     $id = $_POST['id']; 
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $stmt = $conn->prepare("UPDATE logindata SET username=?, password=? WHERE Id=?");
//     $stmt->bind_param("ssi", $username, $password, $id);
    
//     if($stmt->execute()){
//         // close php tag
//         header("Location: admin-adminDetails.php");
//     }

//     $stmt->close();
//     $conn->close();
// }

?>