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
				
			
		//Querry email, and password validation else error connection.
		$sql = "SELECT email, password From informacionpersonal WHERE email = '$value1' ";		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0)
		{
			// output data of each row
			while($row = $result->fetch_assoc())
				{
				$email = $row["email"];
				$password = $row["pasword"];
					echo $email - $password;
					/*
					if()
					{
						                              //Aqui falta mas codigo!!!!!!!!!!!!!!1	
					}
					*/
				
				}
		
		} 
		else 
		{
			header('Location: /errorconn.html');
		}
	
		
		
		//Notification of record created successfully or not and if there is an existin record.
		
		if ($conn->query($sql) === TRUE)
		{
			header('Location: /perfil.php');
		}
		
		elseif($conn->errno == 1062)
		{
			header('Location: /errordupli.html');
		}
		else
		{
			header('Location: /errorconn.html');
		}
		
		
		$conn->close();
?>