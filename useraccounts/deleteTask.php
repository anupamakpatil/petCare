<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "petCare";
//create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);
if($conn) {
    $delId = $_POST['delvalue'];

$sql = "DELETE FROM `todo` WHERE task = '$delId'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$conn->close();

?>