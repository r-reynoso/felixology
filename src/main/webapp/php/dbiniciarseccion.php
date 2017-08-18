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
			
		//----------------------------------------------------------------------------
		
		//Getting data from iniciarseccion.php
		$value1 = $_POST['email'];
		$value2 = md5($_POST['password']);
		$value3 = $_POST['name'];		
			
		//Passing email value onto perfilinfo.php for the query data selection.
		$_SESSION["value1"] = $value1;
		$_SESSION["value3"] = $value3;
		
		//Querry email, and password validation else error connection.
			
			$sql = "SELECT email, password From informacionpersonal WHERE email = '$value1' AND password = '$value2'";		
			$result = $conn->query($sql);
			
			if ($value1 == 'admin@rayaera.net' and $value2 == 'cad3ec6cf88a83af22d58c462bd2721c')
			{
				header('Location: /admin.php');			
			}
			elseif ($value3)
			{
				header('Location: /admin.php');
				
			}
			elseif ($result -> num_rows > 0)		
			{
				header('Location: /perfilinfo.php');							  				
			}			 
			else
			{
				header('Location: /iniciarseccionerror.php');
				/*echo $value1;
				echo " --- ";
				echo $value2;
				echo " --- ";
				echo $value3;
				echo " --- ";
				echo $value;*/
			}
		
		//session_destroy();
		$conn->close();
?>