<?php

//$servername = "localhost";
//$username = "slurm";
//$password = "slurmforum";
//$dbname = "forum";
//
//
//    
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//
//$uid = "SELECT MAX(userID) FROM Users";
//
//$return = $conn->query($uid);
//$res = array();
//
//if($return->num_rows>0){
//    while($rows=$return->fetch_assoc()){
//        array_push($res,$rows["userID"]);
//    }
//    
//    session_start();
//
//    $_SESSION["UID"] = $res[0];
//    
//    echo 1;
//}else{
//    $res[0] = -1;
//    echo -1;
//}

//header("http://cs-ithaca.eastus.cloudapp.azure.com/~tclerico/final/tests/AccountPage.html");

$uid = $_REQUEST["uid"];
//$nid = $uid + 1;
session_start();
$_SESSION["UID"] = $uid;


//$conn->close()


?>