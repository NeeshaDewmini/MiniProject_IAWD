<?php
include  "conn.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM newsletter WHERE id=$id";
    $conn->query($sql);
}

header("location: /GZ[1]/index.php");
exit;
?>