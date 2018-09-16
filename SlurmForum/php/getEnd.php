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

$sql = "SELECT * FROM EndDate";

$res = $conn->query($sql);
$toRet = array();
if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        array_push($toRet,$row["end"]);
    }
}else{
    $toRet[0] = "no";
}

echo json_encode($toRet);
$conn->close();



?>