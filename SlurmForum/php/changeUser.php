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

$nName = $_REQUEST["name"];

$sql  ="SELECT * FROM Users WHERE username=$nName";
$res = $conn->query($sql);

if($res->num_rows > 0){
    echo -1;
}else{
    $alter = "UPDATE Users SET username='$nName' WHERE userID=$uid";
    $conn->query($alter);
    echo 1;
}

$conn->close();

?>