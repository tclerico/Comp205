<?php

$servername = "localhost";
$username = "slurm";
$password = "slurmforum";
$dbname = "forum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

$uid = $_SESSION["UID"];

$email = $_REQUEST["email"];

$sql = "SELECT * FROM Users WHERE email=$email";
$result= $conn->query($sql);

if($result->num_rows > 0){
    echo -1;
}else{
    $alter = "UPDATE Users SET email='$email' WHERE userID=$uid";
    $conn->query($alter);
    echo 1;
}

$conn->close();



?>