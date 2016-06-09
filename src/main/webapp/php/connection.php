<?php
	// configuration	
	$servername = "10.30.84.161";
	$username = "rayaera";
	$password = "Maricela1765";
	$database = "registracion";
		
	// database connection with error handeler		
	$conn = mysqli_connect($servername, $username, $password, $database);	
	if (!$conn)
	{
		header('Location: /errorconn.html');
		exit;
	}
	
	//Starting all of the variables connections in and out of this php page.
	session_start();
	$_SESSION['connection'] = $conn;
?>