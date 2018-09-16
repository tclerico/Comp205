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


$tid = $_SESSION["TID"];
$uid = $_SESSION["UID"];

$sql  = "SELECT * FROM Favorites WHERE userID=$uid AND topicID=$tid";

$result = $conn->query($sql);

$toReturn = array();
if($result->num_rows > 0){
    array_push($toReturn,1);
}else{
    array_push($toReturn,0);
}

$sql2 = "SELECT * FROM Topic WHERE topicID=$tid";
$result2 = $conn->query($sql2);


if($result2->num_rows > 0){
    while($rw = $result2->fetch_assoc()){
        array_push($toReturn,$rw["topicName"]);
    }
}else{
    array_push($toReturn,"NO NAME");
}

echo json_encode($toReturn);
$conn->close();


?>