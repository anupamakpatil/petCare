<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "petCare";
//create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);

//check connection
if($conn) {
    

    $title = $_POST['title'];
    $tdate= $_POST['date'];
    $ttime= $_POST['time'];
    $usr=1;
    $sql = "INSERT INTO todo (`task`, `todoDate`, `todoTime`, `userID`) VALUES ('$title', '$tdate', '$ttime', '$usr')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else {
    console.log("We are not connected to database");
}


$conn->close();

?>
