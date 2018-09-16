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



$sql = "SELECT * FROM Post ORDER BY postID DESC LIMIT 10";

$res = $conn->query($sql);
$toRet = array();
if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        array_push($toRet,$row["postID"],$row["title"]);
    }
}else{
    echo -1;
}

echo json_encode($toRet);
$conn->close;


?>