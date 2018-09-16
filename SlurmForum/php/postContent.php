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

$postID = $_SESSION["PID"];

$sql = "SELECT * FROM Post WHERE postID=$postID";

$result = $conn->query($sql);

$toReturn = array();

$uID;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        array_push($toReturn,$row["title"],$row["date"],$row["message"]);
        $uID = $row["userID"];
    }
}else{
    $toReturn[0] = "0 Results";
}



$uname = "SELECT username FROM Users WHERE userID=$uID";
$n = $conn->query($uname);
if($n->num_rows > 0){
    $in = $n->fetch_assoc();
    array_push($toReturn,$in["username"]);
}




echo json_encode($toReturn);
$conn->close();

?>