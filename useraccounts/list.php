<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "petCare";

//create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);


	$sql = "SELECT userID, eventID, eventName, eventDate, eventTime, eventDescription, eventVenue, noOfParticipants FROM `events`";
	$res = mysqli_query($conn, $sql);
?>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Events Information Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="main.css">

        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        

        
  </head>


  <body>

  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
	
      <a id="logo-container" href="#" class="brand-logo">petCare</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="./notifPage.html">Notifications</a></li>
        <li><a href="./todo.php">To-Do List</a></li>
        <li><a href="./list.php">Event List</a></li>
        <li><a href="./eventInsert.html">Host Event</a></li>
		<li><a href="../petcare/home.php">Pet Store</a></li>
		<li><a href="./notehome.php">Add Note</a></li>
		<li><a href="./chooseForm.php">Select your pet</a></li>
		<li><a href="index.php?logout=true">Logout</a></li>
        <!-- <li><a href="#"></a></li> -->
        
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="./notifPage.html">Notifications</a></li>
        <li><a href="./todo.php">To-Do List</a></li>
        <li><a href="#">Event List</a></li>
        <li><a href="#">Host Event</a></li>
		<li><a href="#">Pet Store</a></li>
		<li><a href="#">Add Note</a></li>
		<li><a href="#">Select your pet</a></li>
		<li><a href="index.php?logout=true">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    <div class="parent flex-parent">
        
      <h1> List of all the Events </h1>
      
           
           <ol> <?php while($row = $res ->fetch_assoc()) {
            if($row["noOfParticipants"] < 25) {
               ?>
               <iframe name="dummyframe1" id="dummyframe1" style="display: none;"></iframe>
               <form method="post" action="register.php" target="dummyframe1" id="<?php echo $row["eventName"]; ?>">
               <li><?php echo "Name  -  " . $row["eventName"]. "<br>";
                         echo "Date - ". $row["eventDate"]."<br>";
                         echo "Time - ". $row["eventTime"]."<br>";
                         echo "Venue - ". $row["eventVenue"]. "<br>";
                         echo "Description - ". $row["eventDescription"]. "<br>";?></li><br>
                         <input type=hidden name="userID" value=" <?php echo $row["userID"]; ?> ">
                         <input type=hidden name="eventID" value=" <?php echo $row["eventID"]; ?> ">
                         <input type="hidden" name="postId" value="" />
           <button type="submit" class="postButton" id="<?php echo $row["eventID"]; ?>">Register</button>
           </form>
           <br>
               
               <?php
           } }
           ?>
               
           </ol>
          
      </div>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <script>

$('.postButton').click(function() {
    $('#postId').val($(this).attr('id'));
});



    $(document).ready(function () {

        $("#formABC").submit(function (e) {

            //stop submitting the form to see the disabled button effect
            e.preventDefault();

            //disable the submit button
            $("#btnSubmit").attr("disabled", true);

            return true;

        });
    });
</script>

      
    </body>

   

</html>
