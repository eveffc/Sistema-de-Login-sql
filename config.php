<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "Evelyn@19";
	$dbname = "login";
	$port = "3306";

	try {
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
	} catch (Exception $ex) {
		echo "Erro";
	}
	if (!$conn) {
   	 die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	mysqli_close($conn);
?>