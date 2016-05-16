<!-- Database connection script -->>
<?php
	 
		$servername = "10.30.84.161";
		$username = "rayaera";
		$password = "Maricela1765";		
		$database = "registracion";
		
		$conn = mysqli_connect($servername, $username, $password, $database);   // Create connection
			
		if (!$conn)																// Check connection
		{
			echo "Did Not Connect successfully";
			die(" Connection failed: " . mysqli_connect_error());
		}
		else
		{
			echo "Did Connect successfully!!!";
		}			

					
					
		$value = $_POST['email'];
		
		$sql = "INSERT INTO informacionpersonal (email) VALUES ('$value')";
		
			
?>