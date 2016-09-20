<?php
	require('common.php');
?>

<!DOCTYPE html>
<html lang="en" ng-app="mainApp">
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

</head>
<body class="home fullscreen">
	<!-- Loader _______________________________-->
	<div class="loadreveal"></div>
	<div id="loadscreen"><div id="loader"></div></div>

	<!-- HEADER _____________________________________________-->
	<header role="banner" id="header">
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
						<li class="current-menu-item"><a href="#">Home</a></li>
						<li class="menu-item-has-children"><a href="#">Profile</a>
							<ul class="sub-menu">
								<li><a href="webpages/myProfile.html">My Profile</a></li>
								<li><a href="login.php">Login</a></li>
								<li><a href="register.php">Register</a></li>
								<li><a href="memberlist.php">Member List</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
						<li><a href="webpages/myTeams.php">My Teams</a></li>
						<li><a href="webpages/contact.html">Contact Us</a></li> 
					</ul>
				</div>
			</nav>
	</header>

	<section id="content" role="main">
		<div class = "tourney_list">
			<?php 

				$query = " 
			        SELECT 
			            * 
			        FROM Tournaments 
			    "; 
			     
			    try 
			    { 
			        // These two statements run the query against your database table. 
			        $stmt = $db->prepare($query); 
			        $stmt->execute(); 
			    } 
			    catch(PDOException $ex) 
			    { 
			        // Note: On a production website, you should not output $ex->getMessage(). 
			        // It may provide an attacker with helpful information about your code.  
			        die("Failed to run query: " . $ex->getMessage()); 
			    } 
			         
			    // Finally, we can retrieve all of the found rows into an array using fetchAll 
			    $rows = $stmt->fetchAll(); 


				//$sql = "SELECT * FROM Tournaments";
				//$result = $db->query($sql);
				echo "<table style='width:100%' bgcolor='white'>";
				echo "<th> Tournament </th> <th> Maximum Players </th> <th> Prize </th>";
					foreach($rows as $row):
						echo "<tr> 
							<td> ". $row['Title'] ."</td>
							<td>" . $row['Max_Players'] . "</td> 
							<td> $". $row['Cash'] ."</td>
							<td> 
								<form action ='webpages/tournament.php' method = 'post'> 
									<input type = 'hidden' name = 'tournament_id' value = ' ". $row[Tournament_ID]."'>
									<input type = 'submit' value = 'JOIN NOW'> 
								</form> 
							</td>".
						"</tr>";
					endforeach;
				echo "</table>";
			?>
		</div>	
	</section>
		
		<div class="page_ender">
			<img src="imgs/Logo_Title.png" alt="Logo" style="width:450px;height:80px;">
		</div>

<!-- Javascripts ______________________________________-->
<script src="js/jquery.min.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>

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