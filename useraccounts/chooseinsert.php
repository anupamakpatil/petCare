<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "petCare";
//create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);

//check connection
if($conn) {
    $pett=$_POST['pet-type'];
    $petn=$_POST['p-name'];
    $petd=$_POST['pdob'];
    $sql="INSERT INTO pet(`petName`,`petType`,`petDob`,`userID`) VALUES ('$petn','$pett','$petd',1)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }


}
