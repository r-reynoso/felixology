<?php
	// configuration
		
	$dbhost        = "10.30.84.161";
	$dbname        = "registracion";
	$dbuser        = "rayaera";
	$dbpass        = "Maricela1765";
		
	// database connection
		
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
	
	// Check connection
	
	if (!$conn)
	{
		header('Location: /errorconn.html');
		exit;
	}
?>