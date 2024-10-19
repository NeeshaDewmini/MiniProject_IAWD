
<?php

    include  "conn.php";
    include "function.php";

    if (isset($_GET['id']) && isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
    $id = $_GET['id'];
    deleteAdmin($id);  // Call the deleteAdmin function
    exit();
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
        <br>
        <h2>List of Subscribers</h2>
        <a class="btn btn-primary" href="/GZ[1]/create.php" role="button">New Subscriber</a>
        <a class="btn btn-primary" href="/GZ[1]/HomePage.php" role="button">Close</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                

                    //read all row from database
                    $query = "SELECT * FROM newsletter";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result =$stmt->get_result();

                    if (!$result) {
                        die("Invalid query: " . $connect->error);
                    }

                    //read data of each row
                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['email']}</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='/GZ[1]/edit.php?id={$row['id']}'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/GZ[1]/delete.php?id={$row['id']}'>Delete</a>
                        </td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>

        
    </div>
</body>
</html>
