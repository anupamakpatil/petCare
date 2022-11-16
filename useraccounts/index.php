<?php 

session_start();

$user_id = $_SESSION['user_id'];

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Notifications</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Pet Care Application</h1>
  
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="cat.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">pets</i></h2>
            <h5 class="center">Pets</h5>

            <p class="light">A pet shop or pet store is a retail business which sells animals and pet care resources to the public. A variety of animal supplies and pet accessories are also sold in pet shops. The products sold include: food, treats, toys, collars, leashes, cat litter, cages and aquariums. Some pet stores provide engraving services for pet tags, which have the owner's contact information in case the pet gets lost.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">pets</i></h2>
            <h5 class="center">Easy to use</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
      </div>
    </div>
    <div class="parallax"><img src="fishtank.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
      </div>
    </div>
    <div class="parallax"><img src="doggy.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">

if (!("Notification" in window)) {
   // Check if the browser supports notifications
   alert("This browser does not support desktop notification");
  } else if (Notification.permission === "granted") {
    // Check whether notification permissions have already been granted;
    // if so, create a notification
    var title = "PetCare- Building bonds";
         icon = "./logo.png";
         var body = "Welcome to PetCare!";
        const notification = new Notification(title, { body, icon });
    // …
  } else if (Notification.permission !== "denied") {
    // We need to ask the user for permission
    Notification.requestPermission().then((permission) => {
      // If the user accepts, let's create a notification
      if (permission === "granted") {
         var title = "PetCare- Building bonds";
         icon = "./logo.png";
         var body = "Welcome to PetCare!";
        const notification = new Notification(title, { body, icon });
        // …
      }
    });
   }
  
</script>

<script type="text/javascript">
        const successCallback = (position) => {
          console.log(position);
        };

        const errorCallback = (error) => {
          console.log(error);
        };

        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
      </script>

  </body>
  
</html>


