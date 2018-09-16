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

$search = "SELECT * FROM Topic";

$topics = $conn->query($search);

$toReturn = array();

while($row = $topics->fetch_assoc()){
    array_push($toReturn,$row["topicID"],$row["topicName"]);
}

echo json_encode($toReturn);
$conn->close();


?>