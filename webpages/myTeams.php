<?php 

    // First we execute our common code to connection to the database and start the session 
    require("../common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: ../login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    } 
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<!--<link rel="Shortcut Icon" type="image/ico" href="../images/favicon.ico" />-->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  
	<title>GGTOURNEYS</title>
  
	<!-- CSS _____________________________________________-->
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/icomoon.css" media="screen" />
	<link rel="stylesheet" href="css/magnificpopup.css" media="screen" />
	<link rel="stylesheet" href="style.css" media="screen" />  

	<!-- Fixing Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" />
	<![endif]-->

</head>
<body class="home fullscreen">
	<!-- Loader _______________________________-->
	<div class="loadreveal"></div>
	<div id="loadscreen"><div id="loader"></div></div>

	<!-- HEADER _____________________________________________-->
	<header role="banner" id="header">
		<fb:login-button autologoutlink="true" scope="user_likes,email"></fb:login-button>
			<!-- Main menu __-->
			<nav id="mainmenu" role="navigation">
			
				<div id="menu-burger"><i class="icon-menu"></i></div>
				<div id="searchicon">
					<i class="icon-search"></i>
					<form action="/" method="get" id="searchbar">
						<fieldset>
							<input type="text" name="s" id="searchbar-input" value="" />
							<button type="submit" id="searchbar-submit"></button>
						</fieldset>
					</form>				
				</div>
				<div id="menu">
					<ul>
						<li><a href="../index.php">Home</a></li>
						<li class="menu-item-has-children"><a href="#">Profile</a>
							<ul class="sub-menu">
								<li><a href="myProfile.html">My Profile</a></li>
								<li><a href="../login.php">Login</a></li>
								<li><a href="../register.php">Register</a></li>
								<li><a href="../memberlist.php">Member List</a></li>
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</li>
						<li class = "current-menu-item"><a href="myTeams.php">My Teams</a></li>
						<!--<li><a href="#">Friends</a></li>
						<li><a href="#">Messages</a></li> -->
						<li><a href="contact.html">Contact Us</a></li> 
					</ul>
				</div>
			</nav>
	</header>
	<section id="content" role="main">
		<?php

			/*--------------------BEGINNING OF THE CONNECTION PROCESS------------------*/
			//define constants for db_host, db_user, db_pass, and db_database
			//adjust the values below to match your database settings
			define("DB_HOST", "localhost");
			define("DB_USER", "jameslee_2");
			define("DB_PASS", "xV!*pcB[5c7%"); 
			define("DB_DATABASE", "jameslee_ggtourneys"); 

			//connect to database host
			$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

			//make sure connection is good or die
			if ($connection->connect_errno) 
			{
			    $console.log("DID NOT GO THROUGH");
			    die("Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error);
			}
			/*-----------------------END OF CONNECTION PROCESS------------------------*/

			/*----------------------DATABASE QUERYING FUNCTIONS-----------------------*/

			?> 
			
			<h1> Current Teams </h1>
			<?
			//SELECT - used when expecting single OR multiple results
			//returns an array that contains one or more associative arrays
			$username = $_SESSION['user']['username'];
			$userID = $_SESSION['user']['id'];
			$sql = "SELECT Teams.*, users.id, users.username, users.email FROM Teams JOIN users ON users.id = Teams.admin_id
			WHERE Teams.Member_ID = $userID OR Teams.Admin_ID = $userID";
			$result = $connection->query($sql);

			if ($result->num_rows > 0) {
				echo "<table>";
				echo "<th> Team Name </th> <th> Administrator </th>";
				while($row = $result->fetch_assoc()) {
					echo "<tr> 
						<td> ". $row[Team_Name] ."</td>
						<td>". $row[username]."</td>".

					"</tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			$connection->close();
		
			?>
		</div>	
	</section>
<div class="page_ender">
		<font color="white">
		<!--<h2 class="big no-margin">--><strong>GG Tourneys</strong><!--</h2>-->
		<img src="imgs/LogoMakr.png" alt="Logo" style="width:100px;height:80px;">
		</font>
	</div>
	
	<div font-family="BigNoodleTilting">
		GGTourneys
	</div>

<!-- Javascripts ______________________________________-->
<script src="js/jquery.min.js"></script> 
<script src="js/retina.min.js"></script> 
<!-- include Masonry -->
<script src="js/isotope.pkgd.min.js"></script> 
<!-- include image popups -->
<script src="js/jquery.magnific-popup.min.js"></script> 
<!-- include mousewheel plugins -->
<script src="js/jquery.mousewheel.min.js"></script>
<!-- include carousel plugins -->
<script src="js/jquery.tinycarousel.min.js"></script>
<!-- include svg line drawing plugin -->
<script src="js/jquery.lazylinepainter.min.js"></script>

<!-- Facebook Log in button -->
<script src="facebook_button.js"></script>

<!-- include custom script -->
<script src="js/scripts.js"></script>

</body>
</html>