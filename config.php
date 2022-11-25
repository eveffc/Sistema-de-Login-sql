<?php

	$servername = "localhost";
	$username = "root";
	$password = "Evelyn@19";
	$dbname = "login";
	$port = "3306";


		$conn = new mysqli ($servername, $username, $password, $dbname);
		
		

	if (!$conn) {
   	 die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	mysqli_close($conn);
?>