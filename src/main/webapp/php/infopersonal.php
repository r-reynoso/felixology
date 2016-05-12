<?php

	$servername = "localhost";
	$username = "username";
	$password = "password";
	
	
	$conn = mysqli_connect($servername, $username, $password);              // Create connection
		
	if (!$conn)																// Check connection
		{
		    die("Connection failed: " . mysqli_connect_error());
		    echo "Did Not Connect successfully";
		}
	echo "Connected successfully";
	
?>