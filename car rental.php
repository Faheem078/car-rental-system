<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CarRentalDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$car = $_POST['car'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = password_hash($_POST['psw'], PASSWORD_DEFAULT); // Encrypt password

// Insert data into the Users table
$sql = "INSERT INTO users (firstname, middlename, lastname, car, phone, address, email, password) 
        VALUES ('$firstname', '$middlename', '$lastname', '$car', '$phone', '$address', '$email', '$password')";



if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
