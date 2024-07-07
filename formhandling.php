<?php 
require "database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $stmt = $con->prepare("INSERT INTO users (name, email, password, mobile) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $password, $phone);
    
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$con->close();
?>
