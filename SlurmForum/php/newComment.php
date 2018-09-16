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
$pid = $_SESSION["PID"];

$comment = $_REQUEST["sub"];

$sql = "INSERT INTO Comments (userID, postID, comment) VALUES ($uid, $pid, '$comment')";
$conn->query($sql);


$get = "SELECT username FROM Users WHERE userID=$uid";
$res = $conn->query($get);
$ret = array();
if($res->num_rows > 1){
    echo -1;
}else{
    while($row = $res->fetch_assoc()){
        array_push($ret,$row["username"]);
    }
}
array_push($ret,$comment);
echo json_encode($ret);

$conn->close();


?>