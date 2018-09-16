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

date_default_timezone_set("America/New_York");
$date = date('Y-m-d H:i:s');
$now = date('Y-m-d H:i:s',strtotime($date) + (24*3600));

//$date = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $date)));

$sql = "INSERT INTO EndDate (end) VALUES ('$now')";
$conn->query($sql);

echo $now;

$conn->close();


?>