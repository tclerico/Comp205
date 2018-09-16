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

$info = $_REQUEST["info"];

$sql = "SELECT * FROM Users WHERE username=$info OR email=$info";

$result = $conn->query($sql):

if($result->num_rows > 0){
    echo -1;
}else{
    //if the info given is an email
    if(stripos("@",$info)!==false){
        $alter = "UPDATE Users SET email=$info WHERE userID=$uid";
    }else{
        $alter = "UPDATE Users SET username=$info WHERE userID=$uid";
    }
    
    $change = $conn->query($alter);
    
    echo 1;
    
}


$conn->close();

?>