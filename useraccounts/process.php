<?php
require_once('config.php');
?>
<?php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "petCare";

//create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);



if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= $_POST['password'];


		

		$sql = "INSERT INTO users (firstname, email, phonenumber, password ) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $email, $phonenumber, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}

		$sql1 = "INSERT INTO user (`userID`, `username`) VALUES (NULL, '$firstname')";

		if ($conn->query($sql1) === TRUE) {
			echo "New record created successfully";
		  } else {
			echo "Error: " . $sql1 . "<br>" . $conn->error;
		  }

		  $sql2 = "SELECT userID FROM `user` WHERE username = '$firstname'";
			$res = mysqli_query($conn, $sql);

		  $_SESSION['user_id'] = $res['userID'];
         

}else{
	echo 'No data';
}
?>