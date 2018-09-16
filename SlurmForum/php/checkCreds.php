<?php


//need to query users table looking for givenUser
//if found need to make sure passwords match
//if user/pass doesnt match return to login page

//if match on both create session with user id for given username

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


$givenUser = $_REQUEST["user"];
$givenPass = $_REQUEST["pass"];



$check = "SELECT * FROM Users WHERE username='$givenUser'";

$result = $conn->query($check);

$row = $result->fetch_assoc();

if($result->num_rows > 0){
    //matches passwords
    if(stripos($givenPass,$row["password"])!==false){
        //gets assoc userID
        $response = $row["userID"];
        //starts login session
        session_start();
        //initializes userid as session variable with correct userid
        $_SESSION["UID"] = $response;
        //return 1 for success
        echo 1;
    }else{
        //return 0 for fail
        echo 0;
    }
}else{
    //return 0 for fail
    echo 0;
}

$conn->close;


?>