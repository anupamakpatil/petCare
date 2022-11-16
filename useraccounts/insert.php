<?php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "petCare";

//create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);

//check connection
if($conn) {
    echo "<h1>We are connected to database</h1>";
}
else {
    echo "<h1>We are not connected to database</h1>";
}

$userID = $_POST['userID'];
$eventID = $_POST['eventID'];
$eventName = $_POST['eventname'];
$eventVenue = $_POST['eventvenue'];
$eventDate = $_POST['eventdate'];
$eventTime = $_POST['eventtime'];
$eventDescription = $_POST['eventdescription'];

$sql = "INSERT INTO events (`eventID`, `userID`, `eventName`, `eventDate`, `eventTime`, `eventDescription`, `eventVenue`, `noOfParticipants`) VALUES ('$eventID', '$userID', '$eventName', '$eventDate', '$eventTime', '$eventDescription', '$eventVenue', '0')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>