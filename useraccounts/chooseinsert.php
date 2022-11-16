<<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "petCare";
//create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);
//check connection
if($conn) {

  $pett=$_POST['pettype'];
  $petn=$_POST['pname'];
  $petd=$_POST['pdob'];
  date_default_timezone_set('Asia/Kolkata');
  $date = date('Y-m-d');
    $sql="INSERT INTO pet(`petName`,`petType`,`petDob`,`userID`) VALUES ('$petn','$pett','$petd',1)";
    if($pett=='Cat'){
      $sql2="INSERT INTO todo (`task`, `todoDate`, `todoTime`, `userID`) VALUES ('feed cat', '$date', '07:00:00', 1),('cat play time',$date,'12:00:00',1),('clean cat litter box',$date,'17:00:00',1),('feed cat',$date,'19:00:00',1),('cat bedtime',$date,'23:00:00',1)";

    }
    else if($pett=='Dog'){
      $sql2="INSERT INTO todo (`task`, `todoDate`, `todoTime`, `userID`) VALUES ('walk', '$date', '07:00:00', 1),('feed dog',$date,'08:00:00',1),('dog play time',$date,'17:00:00',1),('feed dog',$date,'19:00:00',1),('dog bedtime',$date,'23:00:00',1)";
    }
    else{
      $sql2="INSERT INTO todo (`task`, `todoDate`, `todoTime`, `userID`) VALUES ('feed fish','$date','09:00:00',1),('feed fish',$date,'19:00:00',1),('clean fish-water',$date,'22:00:00',1)";
    }
    if ($conn->query($sql) === TRUE && $conn->query($sql2)===TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }


}
