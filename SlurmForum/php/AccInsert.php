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


$uname = $_REQUEST["name"];
$pass = $_REQUEST["pass"];


$ins = "INSERT INTO Users (username, password) VALUES ('$uname', '$pass')";
$conn->query($ins);

$conn->close();
?>