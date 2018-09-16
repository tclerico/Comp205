<?php session_start(); ?>
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

$userID = $_SESSION['UID'];

$search = "SELECT * FROM Users WHERE userID='$userID'";

$result = $conn->query($search);

$row = $result->fetch_assoc();

$toReturn = array();

array_push($toReturn,$row["userID"],$row["username"],$row["email"]);

echo json_encode($toReturn);
$conn->close();

?>