<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<link rel="Shortcut Icon" type="image/ico" href="../images/favicon.ico" />
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
		<!--<fb:login-button autologoutlink="true" scope="user_likes,email"></fb:login-button>-->
		<div class="wrapper">
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
						<li><a href="myProfile.html">My Profile</a></li>
						<li><a href="#">Friends</a></li>
						<li><a href="#">Messages</a></li> 
						<li><a href="contact.html">Contact Us</a></li> 
						<!--<li><a href="#" onclick="fbLogin();">Log In</a></li>-->
					</ul>
				</div>
			</nav>
		</div> <!-- END .wrapper -->
		
	</header>

	<!--<section id="content" role="main">-->
		<div class = "tourney_list">
			<table bgcolor="white">
			  <tr>
			 	 <td>11:30 AM CST</td>
			 	 <td>7 / 11 / 2016</td>
				 <td>5 / 16</td> 
				 <td>$0</td>
			  </tr>
			  <tr>
			    <td>7:00 PM CST</td>
			    <td>7 / 16 /2016</td> 
			    <td>3 / 16</td>
			    <td>$0</td>
			  </tr>				
			</table>
		</div>
		<div class="page_ender">
			<font color="white">
			<!--<h2 class="big no-margin">--><strong>GG Tourneys</strong><!--</h2>-->
			</font>
		</div>
		<div font-family="BigNoodleTilting">
			GGTourneys
		</div>



	<!--</section>-->

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
<!--<script src="../facebook_button.js"></script>-->

<!-- include custom script -->
<script src="js/scripts.js"></script>

</body>

</html>