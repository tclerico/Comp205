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

$pid = $_SESSION["PID"];

$select = "SELECT Users.username, Comments.comment FROM Comments INNER JOIN Users ON Comments.userID = Users.userID WHERE postID=$pid";

$res = $conn->query($select);
$toRet = array();

if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        array_push($toRet,$row["comment"],$row["username"]);
    }
}else{
    $toRet[0] = -1;
}

echo json_encode($toRet);
$conn->close();



?>