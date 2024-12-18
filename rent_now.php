<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "CarRentalDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $car_id = $_POST['car_id'];
    $user_name = trim($_POST['user_name']);
    $user_email = trim($_POST['user_email']);
    $user_phone = trim($_POST['user_phone']);
    $rental_start = $_POST['rental_start'];
    $rental_end = $_POST['rental_end'];
    $payment_method = $_POST['payment_method'];
  
    
// Insert data into the Users table
$sql = "INSERT INTO rentals (car_id, user_name, user_email, user_phone, rental_start, rental_end, payment_method) 
VALUES ('$car_id', '$user_name', '$user_email', '$user_phone', '$rental_start', '$rental_end', '$payment_method')";



if ($conn->query($sql) === TRUE) {
echo "Registration successful!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
