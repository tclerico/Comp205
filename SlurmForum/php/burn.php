<?php

$servername = "localhost";
$username = "slurm";
$password = "slurmforum";
$dbname = "forum";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "TRUNCATE Post";

$conn->query($sql);


$com = "TRUNCATE Comments";

$conn->query();

$conn->close();



?>