<!-- Database connection script -->>
<?php
		// Database conection configuration
		$servername = "10.30.84.161";
		$username = "rayaera";
		$password = "Maricela1765";
		$database = "registracion";

		// database connection error handeler
		$conn = mysqli_connect($servername, $username, $password, $database);
			if (!$conn)
			{
				header('Location: /errorconn.html');
				exit;
			}
		
		//Starting all of the variables connections in and out of this php page.
		session_start();
		
		//Getting connection value from connection.php.
		$conn= $_SESSION['connection'];
		
		//Get data from user					
		$value1 = $_POST['email'];
		$value2 = $_POST['zipcode'];
		
		//Get the data from the informacionpersonal database.								
		$sql = "SELECT email, zipcode FROM informacionpersonal WHERE email = '$value1' ";
			
		//Notification to see if the data input is valid, if so, generate automatic email.
		if ($conn->query($sql) === TRUE)
		{
			echo "Paso la prueba";
		}
		
		else
		{
			echo "No paso la prueba";
		}
		
						
		$conn->close();
						
?>