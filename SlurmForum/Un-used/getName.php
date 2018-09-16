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

$id = $_REQUEST["id"];

$sql = "SELECT username FROM Users WHERE userID=$id";

$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $uname = $row["username"];
}else{
    $uname = "error";
}




echo $uname;
$conn->close();


?>