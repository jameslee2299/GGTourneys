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

		//SELECT - used when expecting single OR multiple results
		//returns an array that contains one or more associative arrays

		$sql = "SELECT * FROM Tournaments WHERE Tournament_ID =". $_POST['tournament_id'];
		$result = $connection->query($sql);

		if ($result->num_rows > 0) {
			echo "<table style='width:80%' bgcolor='white' align = 'center'>";
			echo "<th> Tournament </th> <th> Maximum Players </th> <th> Prize </th> <th> ID </th>";
			while($row = $result->fetch_assoc()) {
				echo "<tr> 
					<td> ". $row[Title] ."</td> 
					<td>" . $row[Max_Players] . "</td> 
					<td> $". $row[Cash]."</td>
					<td>".$row[Tournament_ID]."</td> 
					<td> 
						<form action ='routes.php' method = 'post'> 
							<input type = 'hidden' name = 'tournament_id' value = ' ". $row[Tournament_ID]."'>
							<input type = 'submit' value = 'JOIN NOW'> 
						</form> 
					</td>".
				"</tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
		$connection->close();

?>