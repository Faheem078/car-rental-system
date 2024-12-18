<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "CarRentalDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);


    // Insert into the contact_us table
    $sql = "INSERT INTO contact_us ( name, email, phone, message) 
        VALUES ('$name','$email', '$phone','$message')";



        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";}
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
?>
