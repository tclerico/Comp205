
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

$topic = $_SESSION["TID"];


$sql = "SELECT * FROM Post WHERE topicID=$topic";

$result = $conn->query($sql);

$toReturn = array();
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        array_push($toReturn,$row["postID"],$row["title"]);
    }
}else{
    $toReturn[0] = -1;
}

//echo("TOPIC ID: " . $topic . " STUFF: " . json_encode($toReturn));
echo json_encode($toReturn);
$conn->close();

?>