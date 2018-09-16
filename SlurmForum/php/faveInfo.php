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

$sql = "SELECT Favorites.userID, Favorites.topicID, Topic.topicName FROM Favorites INNER JOIN Topic ON Favorites.topicID = Topic.topicID WHERE userID=$uid";

$result = $conn->query($sql);

$toReturn = array();
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        array_push($toReturn,$row["topicID"],$row["topicName"]);
    }
}else{
    $toReturn[0] = -1;
}

echo json_encode($toReturn);

$conn->close();


?>