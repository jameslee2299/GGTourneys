<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSS _____________________________________________-->
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="../css/icomoon.css" media="screen" />
    <link rel="stylesheet" href="../css/magnificpopup.css" media="screen" />
    <link rel="stylesheet" href="../css/columns.min.css" media="screen" />
    <link rel="stylesheet" href="../style.css" media="screen" />  
</head>
<body>

    <!-- Loader _______________________________-->
    <div class="loadreveal"></div>
    <div id="loadscreen"><div id="loader"><span></span></div></div>

    <!-- HEADER _____________________________________________-->
    <header role="banner" id="header">
            
        <div class="wrapper">
            <!-- Main menu __-->
            <nav id="mainmenu" role="navigation">
            
                <div id="menu-burger"><i class="icon-menu"></i></div>
                <div id="menu">
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li class="menu-item-has-children current-menu-item"><a href="#">Profile</a>
                            <ul class="sub-menu">
                                <li><a href="webpages/myProfile.html">My Profile</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="memberlist.php">Member List</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div> <!-- END .wrapper -->
        
    </header>

    
    
    <!-- MAIN CONTENT SECTION  _____________________________________________-->
    <section id="content" role="main">
        <div class="wrapper">
            <!-- WYSIWYG starts here __-->
            
            <div class="column-grid column-grid-2">
                <div class="column column-span-1 column-push-0 column-first">
                    <h2>Register</h2> 
                        <form action="controller/registerController.php" method="post"> 
                            Username:<br /> 
                            <input type="text" name="username" value="" /> 
                            <br /><br /> 
                            E-Mail:<br /> 
                            <input type="text" name="email" value="" /> 
                            <br /><br /> 
                            Password:<br /> 
                            <input type="password" name="password" value="" /> 
                            <br /><br /> 
                            <input type="submit" value="Register" /> 
                        </form>
                    <br/>
                    <?php 
                        if(isset($_GET['message'])) {
                            if($_GET['message'] == 1) {
                                echo "Please enter a password";
                            } else if($_GET['message'] == 2) {
                                echo "Invalid Email Address";
                            } else if($_GET['message'] == 3) {
                                echo "This username is already in use";
                            } else if ($_GET['message'] == 4) {
                                echo "This email address is already registered";
                            } 
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>


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
