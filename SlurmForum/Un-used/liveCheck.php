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


$name = $_REQUEST["name"];

$sql = "SELECT * FROM Users WHERE username=$name";

$result = $conn->query($sql);
$foun = array();
if($result->num_rows > 0){
    //found a matching name in db
    echo -1;
}else{
    //enter name is og
    echo 1;
}
$conn->close();

?>