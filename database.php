<?php
$servername = 'localhost';
$username = 'root';
$password ="";


$conn = new mysqli($servername , $username ,$password);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully";
}
$sql = "CREATE DATABASE users";
if($conn->query($sql)===true){
    echo "Database created successfully";
}else{
    echo "Error creating database: " . $conn->error;
}
// add my new code in my file
$sql1 = "INSERT INTO "
?>
