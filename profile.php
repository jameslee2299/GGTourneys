<?php



define('DB_NAME', 'gamersconnected');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$summoner = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$skype = $_POST['skype'];
$filthycasual = $_POST['competition'];
$hobbies = $_POST['hobbies'];

$sql = "INSERT INTO profile (Summoner, Email, Age, Gender, Skype, Casual, Hobbies) 
		VALUES ('$summoner', '$email', '$age', '$gender', '$skype', '$filthycasual', '$hobbies')";
if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

mysql_close();
?>