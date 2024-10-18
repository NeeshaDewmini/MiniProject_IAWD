<?php 
include "conn.php"; // Importing connection

$id = "";
$email = "";

$errorMessage = "";
$successMessage = "";

// If the request is GET, fetch existing data
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!isset($_GET["id"])) {  // If id is not set, redirect to index
        header("location: /GZ[1]/index.php");
        exit;
    }

    $id = $_GET["id"];  // Get id from URL

    // Fetch record from database
    $sql = "SELECT * FROM newsletter WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {  // If no record is found, redirect
        header("location: /GZ[1]/index.php");
        exit;
    }

    $id = $row["id"];
    $email = $row["email"];

} else {  // If the request is POST, update the record

    $id = $_POST["id"];
    $email = $_POST["email"];

    do {
        // Check for empty fields
        if (empty($id) || empty($email)) {
            $errorMessage = "All fields are required";
            break;
        }

        // Update the record in the database
        $sql = "UPDATE newsletter SET id='$id', email='$email' WHERE id=$id";

        $result = $conn->query($sql);

        if (!$result) {
            $errorMessage = "Invalid Query: " . $conn->error;
            break;
        }

        $successMessage = "Details updated successfully";

        // Redirect to index page after successful update
        header("location: /GZ[1]/index.php");
        exit;

    } while (false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriber Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
    <h2>New Subscriber</h2>

    <?php
        if(!empty($errorMessage)){
            echo"
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
        }
    ?>

    <form method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">ID</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
        </div>

        <?php
            if(!empty($successMessage)){
                echo"
                    <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    </div>
                    </div>
                ";
            }
        ?>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="/GZ[1]/index.php" role="button">Cancel</a>
            </div>
        </div>
    </form>
    </div>
</body>
</html>