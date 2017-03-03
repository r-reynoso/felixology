<?php
		//Starting all of the variables connections in and out of this php page.
		session_start();
		
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
						
		//Incert data into database	
		//Getting values form cambiopw.php		
		$value1 = md5($_POST['password1']);
		$value2 = md5($_POST['password2']);
		$value3 = $_SESSION["email"];

		echo "$value1......$value2......$value3";

		if($value1 == $value2)			
		{					
			//Querry incert data into database								
			$sql = "UPDATE informacionpersonal SET password '$value1' WHERE email = '$value3'";
			echo"Paso la Prueba";					
		}
		else 		
		{
			echo"No paso Prueba";
		}
		
		$conn->close();
						
?>