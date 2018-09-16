<?php

header('Location: http://cs-ithaca.eastus.cloudapp.azure.com/~tclerico/final/tests/homepage.html');

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

$userID = $_SESSION['UID'];
$topicID = $_SESSION['TID'];

$title = $_REQUEST["title"];
$content = $_REQUEST["content"];

date_default_timezone_set("America/New_York");
$date = date("Y-m-d");
    
$sql = "INSERT INTO Post (date, title, userID, topicID, message) VALUES (NOW(), '$title', '$userID', '$topicID', '$content');";
if( $conn->query($sql) === TRUE){
    echo 1;
}else{
    echo -1;
}

$conn->close();


?>