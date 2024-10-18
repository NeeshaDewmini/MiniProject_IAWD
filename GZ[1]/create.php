<?php 
include "connection.php";//importing connection

$id = "";
$email = "";

$errorMassege = "";
$successMass = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){ // Corrected condition
    $id = $_POST["id"];
    $email = $_POST["email"];

    do{
        if(empty($id) || empty($email)){
            $errorMassege = "All the fields are required";
            break;
        }

        $sql = "INSERT INTO newsletter (id, email)" . "VALUES ('$id', '$email')";

        $result = $conn->query($sql);
        if(!$result){
            $errorMassege= "Invalid query : " . $conn->error;
            break;
        }



        $id = "";
        $email = "";

        $successMass = "Subscriber added successfully";

        header("location: /GZ[1]/index.php");
        exit;

    } while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container my-5">
    <H2>New Subscriber</H2>

    <?php
        if(!empty($errorMassege)){
            echo"
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMassege</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-lable='Close></button>
                </div>
            ";
        }
    ?>

    <form method="post">
    <div class="row mb-3">
    <label class="col-sm-3 col-form lable">ID</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form lable">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
        </div>

        <?php
            if(!empty($successMass)){
                echo"
                    <div class='row mb-3>
                    <div class='offset-sm-3 col-sm-6>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMass</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-lable='Close></button>
                    </div>
                    </div>
                    </div>
                ";
            }
        ?>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div><br>
            <div class = "col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="/GZ[1]/index.php" role="button">Cancel</a>
            </div>
        </div>
    </form>
    </div>
</body>
</html>