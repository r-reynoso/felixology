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
		
		//Getting data from validacion.php
		$validacion = $_POST['validacion'];		
		
		//Getting random number from dbrecuperacionpw.php
		$randnumber = $_SESSION["randnumber"];				
		
		//Querry email, and password validation else error connection.		
		
		if ($validacion == $randnumber)
		{
			header('Location: /cambiopw.php');
		}
		 
		else
		{
			header('Location: /recuperacionpwerror.php');
		}
		
		$conn->close();
						
?>