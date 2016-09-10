<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 

    $username = $_GET['username']; 

    $query = 
    	"SELECT *
    	 FROM users 
    	 WHERE username = :username
    	 AND confirmCode = :code
    	 ";
	
    $query_params = array( 
            ':username' => $_GET['username'], 
            ':code' => $_GET['code']
        ); 

    try 
    { 
        // These two statements run the query against your database table. 
        $stmt = $db->prepare($query); 
        $stmt->execute($query_params); 
    } 

    catch(PDOException $ex) 
    { 
        // Note: On a production website, you should not output $ex->getMessage(). 
        // It may provide an attacker with helpful information about your code.  
        die("Failed to run query: " . $ex->getMessage()); 
    } 
    $row = $stmt->fetchAll(); 

    if(count($row) > 0) {
    	$queryConfirm = "
   			UPDATE users 
			SET confirmed = 1 
			WHERE username = :username";
    	$queryConfirmCode = "
   			UPDATE users 
			SET confirmCode = 0 
			WHERE username = :username";
		$query_params = array( 
            ':username' => $_GET['username'], 
        ); 
		$stmt = $db->prepare($queryConfirm); 
        $stmt->execute($query_params); 
        $stmt = $db->prepare($queryConfirmCode); 
        $stmt->execute($query_params); 
    } 

    header("Location: login.php"); 
         
    // Calling die or exit after performing a redirect using the header function 
    // is critical.  The rest of your PHP script will continue to execute and 
    // will be sent to the user if you do not die or exit. 
    die("Redirecting to login.php");  
     
?> 