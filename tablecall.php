<?php

define('DB_NAME', 'jameslee_tourneys');
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

//$email = $_GET['email'];


$query = "SELECT *
			FROM tourneys";

$sql = mysql_query($query);
$userinfo = array();

while($row_user = mysql_fetch_assoc($sql))
	$userinfo[] = $row_user;

echo json_encode($userinfo);

mysql_close(); //Make sure to close out the database connection			
?>
