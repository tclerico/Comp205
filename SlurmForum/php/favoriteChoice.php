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

$c = $_REQUEST["checked"];

session_start();

$uid = $_SESSION["UID"];
$tid = $_SESSION["TID"];
//$tname = $_REQUEST["title"];

if($c == 1){
    
    $sql = "INSERT INTO Favorites (userID,topicID) VALUES ($uid,$tid)";
    
}else{
    
    $sql = "DELETE FROM Favorites WHERE userID=$uid AND topicID=$tid";
}

$conn->query($sql);

$conn->close();


?>