<?php
/*
 * createDataBase.php
 * create a db
*/
	// Database configuration
    $dbHost     = 'localhost'; //Database_Host
    $dbUsername = 'root'; //Database_Username
    $dbPassword = 'Hacker'; //Database_Password

	// Connect to the server
	$conn = new mysqli($dbHost, $dbUsername, $dbPassword);
	if($conn->connect_error){ // limit information displayed on error
		die("Failed to connect with server. "/* . $conn->connect_error*/);
	} else { echo "Connected to server<br>";}
	/* --------------------
	 Create the database
	*/
	$sql = "CREATE DATABASE comics";
	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully<br>";
	} else {
		echo "Error creating database: <br>"; // leave off $conn->error;
	}
	$conn->close();
?>