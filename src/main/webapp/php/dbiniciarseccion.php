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
			
		//----------------------------------------------------------------------------
		
		//Starting all of the variables connections in and out of this php page.
		session_start();
				
		//Getting data from iniciacion.php
		$value1 = $_POST['email'];
		$value2 = md5($_POST['password']);
		
		//Passing email value onto perfil.php for the query data selection.
		$_SESSION['value1'] = $value1;
			
		//Querry email, and password validation else error connection.
		$sql = "SELECT * From informacionpersonal WHERE email = '$value1' AND password = '$value2' ";		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0)		
		{
			header('Location: /perfil.php');
		} 
		else 
		{
			header('Location: /iniciarseccionerror.php');
		}
	
		$conn->close();
?>