<!-- Database connection script -->>
<?php
		// Create connection variables
		$servername = "10.30.84.161";
		$username = "rayaera";
		$password = "Maricela1765";		
		$database = "registracion";
		
		// Check connection
		$conn = mysqli_connect($servername, $username, $password, $database);   
		if (!$conn)																
		{
				header('Location: /errorconn.html');
				exit;
		}				
		
		//Get data from user					
		$value1 = $_POST['email'];
		$value2 = $_POST['zipcode'];
		
		//Get the data from the informacionpersonal database.								
		$sql = "SELECT * FROM informacionpersonal WHERE email = '$value1' AND zipcode = '$value2' ";
		
		//Notification to see if the data input is valid, if so, generate automatic email.
		if ($conn->query($sql) === TRUE)
			{
				echo "Prueba de verificacion existente de email paso!!!";
			} 
				
		elseif($conn->query($sql) === FALSE) 
			{
				echo "Prueba de verificacion existente de email NOOO paso!!!";
			}
					
		$conn->close();
						
?>