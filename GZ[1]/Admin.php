<?php
require_once 'view.php';
require_once 'registration.php';
require_once 'delete.php';

$query = "SELECT * FROM members";  
$run = mysqli_query($connect, $query);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Membership Registration Form</title>
    <style>
         * {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

/* Container */
.container {
    width: 100%;
    min-height: 100vh; /* Ensures full height */
    padding-left: 8%;
    padding-right: 8%;
    box-sizing: border-box;
    overflow: hidden;
}

/* Navbar */
.navbar {
    width: 100%;
    display: flex;
    align-items: center;
    padding: 20px 0; /* Add padding to navbar for spacing */
}

.logo {
    width: 100px;
    cursor: pointer;
}

.menu-icon {
    width: 25px;
    cursor: pointer;
    display: none !important; 
}

nav {
    flex: 1;
    text-align: right;
}

nav ul {
    padding: 0; /* Remove padding */
}

nav ul li {
    list-style: none;
    display: inline-block;
    margin-right: 30px;
}

nav ul li a {
    text-decoration: none;
    color: #000;
    font-size: 18px;
    padding: 10px;
}

nav ul li a:hover {
    color: #ff5ea2;
}

.login {
    padding: 10px 20px;
    background-color: #ff54a2;
    color: #fff;
    border-radius: 25px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.login:hover {
    background-color: #ff575a;
    color: #000;
}  
        h2 {
            background-color:rgb(9, 89, 129);
            color: white;
            font-size: 44px;
            padding: 50px;
            text-align: center;
           
        }
        
        table {
            background-color: rgb(182, 226, 248) ;
            width: 100%;
            margin: 34px 0;
            border-collapse: collapse;
            
            color: rgb(7, 6, 9);
        }

        table, th, td {
            border: 1px solid rgb(0, 0, 0);
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        .footer {
    margin-top: 50px; /* Reduced margin to minimize space */
    width: 100%;
    padding: 50px 15%;
    background: linear-gradient(#ff54a2, #ff575a);
    color: #efefef;
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box;
    justify-content: space-between;
}

.footer div {
    text-align: center;
    margin-bottom: 20px;
}

.col-2 {
    flex-grow: 2;
}

.footer div h3 {
    font-weight: 300;
    margin-bottom: 20px;
    letter-spacing: 1px;
}

.col-1 a {
    display: block;
    text-decoration: none;
    color: #efefef;
    margin-bottom: 10px;
}

.col-1, .col-3 {
    margin: 0 auto;
}

form input {
    width: 400px;
    height: 45px;
    border-radius: 4px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 40px;
    outline: none;
    border: none;   
}

form button {
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    border-radius: 30px;
    padding: 10px 30px;
    font-size: 15px;
    cursor: pointer;
}

.social-icons {
    margin-top: 30px;
}

.social-icons i {
    font-size: 22px;
    margin: 10px;
    cursor: pointer;
}

p
{
    color: #efefef;
}
    </style>
    <script>
        /* Add your JS here */
    </script>
</head>
<body>
<div class="container">
        <div class="navbar">
            <img src="logo.jpeg" class="logo" alt="GameZone Logo">
            <nav>
                <ul id="menuList">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Event</a></li>
                    <li><a href="#">Sport</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#" class="login">Login</a></li>
                </ul>
            </nav>
            <i class="fa-solid fa-bars menu-icon" onclick="togglemenu()"></i>
        </div>
        
    <h2>Membership Registration Form</h2>
      
    <table>
        <tr>
            <th>Full Name</th>
            <th>Birthday</th> 
            <th>Age</th> 
            <th>NIC</th>
            <th>Contact</th>
            <th>WhatsApp</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Sports</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tbody>
        <?php 
        if ($run && mysqli_num_rows($run) > 0) {
            while ($row = mysqli_fetch_assoc($run)) {
        ?>
            <tr>
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['birthday']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['nic']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['whatsapp']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['sports']; ?></td>
                <td><button>Edit</button></td>
                <td><a href='delete.php?id=<?php echo $row['id']; ?>' id='btn'>Delete</a></td>          
            </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='12'>No records found</td></tr>";
        }
        ?>
        </tbody> 
    </table>
       
    <div class="footer">
        <div class="col-1">
            <h3>QUICK LINKS</h3>
            <a href="#">About Us</a>
            <a href="#">Event</a>
            <a href="#">Sport</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
        </div>
        <div class="col-2">
            <h3>NEWSLETTER</h3>
            <form>
                <input type="email" placeholder="Your Email Address" required>
                <br><br>
                <button type="submit">SUBSCRIBE NOW</button>
            </form>
        </div>
        <div class="col-3">
            <h3>CONTACT US</h3>
            <p>24/A, Udhaya Road, Lane 1<br>New Shade, Colombo 03</p>
            <div class="social-icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
        </div>
    </div>
    
</body>
</html>
