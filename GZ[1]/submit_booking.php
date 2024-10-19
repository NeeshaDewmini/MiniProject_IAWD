<?php
// Database connection details
$servername = "localhost"; // or use "127.0.0.1"
$username = "root"; // default MySQL username
$password = ""; // usually blank for localhost
$dbname = "gamezone_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$event_name = $_POST['name'];
$phone_number = $_POST['phone'];
$event_date = $_POST['event-date'];
$booking_date = $_POST['booking-date'];
$place_name = $_POST['place-name'];
$buyer_name = $_POST['buyer-name'];

// Prepare and bind the SQL query
$stmt = $conn->prepare("INSERT INTO bookings (event_name, phone_number, event_date, booking_date, place_name, buyer_name) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $event_name, $phone_number, $event_date, $booking_date, $place_name, $buyer_name);

// Execute the query
if ($stmt->execute()) {
    echo "Booking successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
