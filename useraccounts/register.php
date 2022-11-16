<?php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "petCare";

//create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);

// check connection
if($conn) {
    echo "<h1>We are connected to database</h1>";
}
else {
    echo "<h1>We are not connected to database</h1>";
}

$uID = $_POST['userID'];
$eID = $_POST['eventID'];


$quer = "UPDATE events SET noOfParticipants = noOfParticipants+1 WHERE eventID = '$eID' AND userID = '$uID'";
if ($conn->query($quer) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();
  
?>