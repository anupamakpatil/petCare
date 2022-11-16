<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "petCare";
//create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);

//check connection
if($conn) {
    $constat="true";
    $sql = "SELECT * FROM `todo`";  //This is where I specify what data to query
    $res = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql);
}
else {
    $constat="false";
}
?>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Todo-List</title>
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
        
        <div class="child flex-child">
       <form>
           <h1> List of Tasks </h1>
           
           <ol> <?php while($row = $res ->fetch_assoc()) {
               ?>
               <input type="checkbox"><?php echo $row["task"]. "  -  " . $row["todoDate"]. "  -  ".$row["todoTime"]."<br>";?></input>
               
               <?php
           }
           ?>
               
           </ol>
       </form>
      </div>
       
      
      
      <div class="child flex-child">
      <iframe name="dummyframe2" id="dummyframe2" style="display: none;"></iframe>
        <form method="post" action="insertTask.php" target="dummyframe2">
          <h1>Add task </h1>
        
          <fieldset>
        
            <label>Task title:</label>
            <input type="text" name="title" id="title" value="" required>
       
            <label>Task Date:</label>
            <input type="date" name="date" id="date" value="" required>
        
            <label>Task Time:</label>
            <input type="time" name="time" id="time" value=""><br>

          </fieldset>
        <button type="submit">Add task</button>
        
        </form>
      </div>
      
      
      <div class="child flex-child">
      <iframe name="dummyframe3" id="dummyframe3" style="display: none;"></iframe>
        <form method="post" action="deleteTask.php" target="dummyframe3">
          <h1>Remove Task</h1>

          <fieldset>
            <label>Select an Event:</label>
		      <select name="delvalue">
		        <?php while( $rows = $result ->fetch_assoc()) {
		        ?>
		        <option value="<?php echo $rows["task"];?>">
		            <?php echo $rows["task"]." ~ ".$rows["todoTime"]." ~ ".$rows["todoDate"]; ?>
		        </option>
		        <?php
		        }
		        ?>
		      </select>
          </fieldset>
          <button type="submit">Delete</button>
        </form>
      </div>
       
      </div>
      
      
    </body>

   

</html>