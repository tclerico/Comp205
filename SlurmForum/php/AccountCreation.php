<?php 

//header('Location: http://cs-ithaca.eastus.cloudapp.azure.com/~tclerico/final/tests/login.html/');

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

$uname = $_REQUEST["name"];



$sql = "SELECT * FROM Users WHERE username='$uname'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    echo 1;
}else{
    echo 0;
}

$conn->close();



?>